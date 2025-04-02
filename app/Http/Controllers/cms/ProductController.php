<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Helpers\GlobalHelper;
use DataTables;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = Cache::remember('product_all', 60, function () {
            return Product::orderBy('created_at', 'desc')->get();
        });
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return date_format($row->created_at, 'Y/m/d H:i');
                })
                ->editColumn('photo', function ($row) {
                    return '<img class="tb_img" src="' . url('storage/' . $row->photo) . '" alt="' . $row->slug . '" data-toggle="popover" data-placement="top" data-content="<img src=' . url('storage/' . $row->photo) . ' style=\'max-height: 200px; max-width: 200px;\'>">';
                })
                ->editColumn('category_id', function ($row) {
                    return $row->product_category->name;
                })
                ->editColumn('title', function ($row) {
                    return '<a data-toggle="tooltip" 
                            href="' . route('products.show', $row->id) . '" 
                            class="btn btn-link btn-primary btn-lg" 
                            data-original-title="Edit Record">
                        ' . Str::limit($row->title, 10, '...') . '
                    </a>';
                })
                ->addColumn('action', function ($row) {
                    $btn_edit = $btn_del = null;
                    if (auth()->user()->hasAnyRole('superadmin|admin|editor') || auth()->id() == $row->created_by) {
                        $btn_edit = '<a data-toggle="tooltip" 
                                    href="' . route('products.edit', $row->id) . '" 
                                    class="btn btn-link btn-primary btn-lg" 
                                    data-original-title="Edit Record">
                                <i class="fa fa-edit"></i>
                            </a>';
                    }

                    if (auth()->user()->hasAnyRole('superadmin|admin')) {
                        $btn_del = '<button type="button" 
                                    data-toggle="tooltip" 
                                    title="" 
                                    class="btn btn-link btn-danger" 
                                    onclick="delRecord(`' . $row->id . '`, `' . route('products.destroy', $row->id) . '`, `#tb_products`)"
                                    data-original-title="Remove">
                                <i class="fa fa-times"></i>
                            </button>';
                    }
                    return $btn_edit . $btn_del;
                })
                ->rawColumns(['photo', 'category_id', 'title', 'action'])
                ->make(true);
        }

        // render view
        return view('cms.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_categories = ProductCategory::where('active', 1)->get();
        return view('cms.products.create', compact('product_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request = $this->storeFeaturedImg($request);
        $product = Product::create($request->all());

        if ($product) {
            return redirect()
                ->route('products.index')
                ->with('success', 'Record Created Successfully');
        }
        $product_categories = ProductCategory::where('active', 1)->get();
        return redirect()
            ->route('cms.products.create', compact('product_categories'))
            ->with('error', 'Error while creating record');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Cache::remember('product_'.$product->id, 60, function () use ($product) {
            return $product;
        });
        return view('cms.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product_categories = ProductCategory::where('active', 1)->get();
        return view('cms.products.create', compact('product', 'product_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $request = $this->storeFeaturedImg($request);
        $product->update($request->all());

        // Redirect the product to the product's profile page
        return redirect()
            ->route('products.index')
            ->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // delete product's profile image if it exists
        if ($product->photo && Storage::disk('public')->exists($product->photo)) {
            Storage::disk('public')->delete($product->photo);
        }

        if ($product->delete()) {
            return response()->json([
                'code' => 1,
                'msg' => 'Record deleted successfully'
            ]);
        }

        return response()->json([
            'code' => -1,
            'msg' => 'Record did not delete'
        ]);
    }


    private function storeFeaturedImg(Request $request, Product $product = null)
    {


        // Store Image
        if ($request->has('featuredimg')) {
            // Delete Image
            if ($product) {
                if ($product->photo && Storage::disk('public')->exists($product->photo)) {
                    Storage::disk('public')->delete($product->photo);
                }
            }
            $photo_filename = GlobalHelper::saveImage($request->file('featuredimg'), 'products', 'public');
            $request->request->add(['photo' => $photo_filename]);
        }

        return  $request;
    }


    // -------------------------- CART Logic code --------------------------
    /**
     * View Cart Busket
     *
     * @return void
     */
    public function cart()
    {
        return view('cart');
    }


    /**
     * Add Product to Cart
     *
     * @param  [type] $id
     * @return void
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
 
    /**
     * Update Cart Item
     *
     * @param  Request $request
     * @return void
     */
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    /**
     * Remove Cart Item
     *
     * @param  Request $request
     * @return void
     */
    public function removeCartItem(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
    // ----------------------------- END CART logic code -----------------------------
}
