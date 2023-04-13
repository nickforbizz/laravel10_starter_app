<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ReportService {

    /**
     * Get the count of records grouped by month.
     *
     * @param Model $model
     * @return array
     */
    public function getCountByMonth(Model $model, $selectedYear): array
    {
        
        // Load the model data
        $data = $model::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', $selectedYear)
            ->groupBy('month')
            ->get();

        $chartData = [];
        foreach ($data as $row) {
            $month = Carbon::create(null, $row->month)->format('F');
            $chartData[$month] = $row->count;
        }

        // Get the years that a record has been created
        $years = $model::select(DB::raw('YEAR(created_at) as year'))
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return [
            'chartData' => $chartData,
            'years' => $years,
        ];
    }
}