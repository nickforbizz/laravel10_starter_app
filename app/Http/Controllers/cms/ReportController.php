<?php

namespace App\Http\Controllers\cms;


use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index($year = null)
    {
        if (!$year) {
            $year = Carbon::now()->year;
        }

        $data = Post::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', '=', $year)
            ->groupBy('month')
            ->get();

        $chartData = [];
        foreach ($data as $row) {
            $month = Carbon::create(null, $row->month)->format('F');
            $chartData[$month] = $row->count;
        }

        return view('reports.index')->with('chartData', $chartData);
    }
}
