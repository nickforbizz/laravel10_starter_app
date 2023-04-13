<?php

namespace App\Http\Controllers\cms;

use App\Exports\PostReportExport;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Services\ReportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index(Request $request, ReportService $reportService)
    {
        $selectedYear = $request->get('year', Carbon::now()->year);

        try {
            $posts_report = $reportService->getCountByMonth(new Post, $selectedYear);
            $users_report = $reportService->getCountByMonth(new User, $selectedYear);
        } catch (\Throwable $th) {
            throw $th;
        }
        
        return view('cms.reports.index', [
            'postsChartData' => $posts_report['chartData'],
            'postsYears' => $posts_report['years'],
            'usersChartData' => $users_report['chartData'],
            'usersYears' => $users_report['years'],
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
