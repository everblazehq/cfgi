<?php

namespace App\Traits;

use Carbon\Carbon;

trait TimeCalculations
{
    public function calculateTimeRemaining($period, $testMode = false)
    {
        $now = Carbon::now('UTC');
        $totalTime = 0;

        if ($testMode) {
            $nextTargetTime = $now->copy()->addSeconds(15);
            $totalTime = 15;
        } else {
            switch ($period) {
                case 1: // 15 minutes
                    $nextTargetTime = $now->copy()->addMinutes(15 - ($now->minute % 15))->second(0);
                    $totalTime = 15 * 60;
                    break;
                case 2: // 1 hour
                    $nextTargetTime = $now->copy()->addHour()->minute(0)->second(0);
                    $totalTime = 60 * 60;
                    break;
                case 3: // 4 hours
                    $nextTargetTime = $now->copy()->addHours(4 - ($now->hour % 4))->minute(0)->second(0);
                    $totalTime = 4 * 60 * 60;
                    break;
                case 4: // 1 day
                    $nextTargetTime = $now->copy()->addDay()->hour(0)->minute(0)->second(0);
                    $totalTime = 24 * 60 * 60;
                    break;
                default:
                    $nextTargetTime = $now->copy()->addMinutes(15 - ($now->minute % 15))->second(0);
                    $totalTime = 15 * 60;
                    break;
            }
        }

        return [
            'timeRemaining' => $nextTargetTime->diffInSeconds($now),
            'countdownPercentage' => 100 - (($nextTargetTime->diffInSeconds($now) / $totalTime) * 100),
            'nextStartTime' => $nextTargetTime,
            'currentTime' => $now
        ];
    }

    public function hasTimeReachedNextStart($currentTime, $nextStartTime)
    {
        // Ensure both are Carbon instances
        $currentTime = Carbon::parse($currentTime);
        $nextStartTime = Carbon::parse($nextStartTime);

        // Return true if current time is greater than or equal to next start time
        return $currentTime->greaterThanOrEqualTo($nextStartTime);
    }
}
