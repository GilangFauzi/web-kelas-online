<?php

namespace App\Http\Controllers\Api;

use App\Models\Mentor;
use App\Models\Classes;
use App\Models\WatchTime;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RevenueController extends Controller
{
    public function calculate()
    {
        $subscription = Subscription::first();
        $netAmount = $this->calculateNetAmount($subscription->price);
        $mentorShare = $this->calculateMentorShare($netAmount);

        $totalMinutes = WatchTime::sum('minutes');
        $classTimes = WatchTime::with('class')
        ->select('class_id', DB::raw('SUM(minutes) as total_minutes'))
        ->groupBy('class_id')
        ->get()
        ->map(function($item) {
            $item->class = $item->class;
            return $item;
        });

        $revenueDistribution = $this->calculateRevenueDistribution($totalMinutes, $classTimes, $mentorShare);
        return response()->json(['message' => 'Net division result by package price ' . $subscription->price, 'result' => $revenueDistribution]);
    }

    // Menghitung jumlah uang bersih
    private function calculateNetAmount($subscriptionPrice)
    {
        $adminFeePercentage = 0.2; // 20%
        return $subscriptionPrice * (1 - $adminFeePercentage);
    }

    // Menghitung bagian hasil yang akan diberikan kepada mentor dari jumlah bersih.
    private function calculateMentorShare($netAmount)
    {
        $mentorSharePercentage = 0.5; // 50%
        return $netAmount * $mentorSharePercentage;
    }

    // Menghitung jumlah hasil yang diterima oleh mentor
    private function calculateRevenueDistribution($totalMinutes, $classTimes, $mentorShare)
    {
        $revenueDistribution = [];
        foreach ($classTimes as $classTime) {
            $class = Classes::find($classTime->class_id);
            $mentor = Mentor::find($class->mentor_id);
            $percentage = $classTime->total_minutes / $totalMinutes;
            $mentorRevenue = $mentorShare * $percentage;
            $revenueDistribution[$mentor->name] = $mentorRevenue;
        }
        return $revenueDistribution;
    }
}
