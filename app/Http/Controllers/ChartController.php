<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Charts\SampleChart;

class ChartController extends Controller
{
    public function index()
    {
        $users = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');

        $chart = new SampleChart;
        $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        $chart->dataset('New User Register Chart', 'line', $users)->options([
            'fill' => 'true',
            'borderColor' => '#51C1C0'
        ]);

        return view('user', compact('chart'));
    }
}