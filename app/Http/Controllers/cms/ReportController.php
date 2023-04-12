<?php

namespace App\Http\Controllers\cms;

use App\Exports\PostReportExport;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Pdf;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $selectedYear = $request->get('year', Carbon::now()->year);

        $data = Post::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', $selectedYear)
            ->groupBy('month')
            ->get();

        $chartData = [];
        foreach ($data as $row) {
            $month = Carbon::create(null, $row->month)->format('F');
            $chartData[$month] = $row->count;
        }

        $years = Post::select(DB::raw('YEAR(created_at) as year'))
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('cms.reports.index', [
            'chartData' => $chartData,
            'years' => $years,
            'selectedYear' => $selectedYear
        ]);
    }


    public function downloadCsv(Request $request)
    {
        $year = request('year', Carbon::now()->year);
        $data = Post::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
                    ->whereYear('created_at', $year)
                    ->groupBy('month')
                    ->get();
    
        $chartData = [];
        foreach ($data as $row) {
            $month = Carbon::create(null, $row->month)->format('F');
            $chartData[$month] = $row->count;
        }
    
        $fileName = 'post_report_'.$year;
    
        $export = new PostReportExport($data);
    
        return Excel::download($export, $fileName.'.xlsx');
    
    }

}
