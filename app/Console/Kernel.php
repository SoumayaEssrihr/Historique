<?php

namespace App\Console;
use Carbon\Carbon;
use App\Models\Deleted_Condidat;
use App\Models\Deleted_Employee;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $thirtyDaysAgo = Carbon::now()->subDays(30);
            Deleted_Condidat::whereDate('created_at', '<', $thirtyDaysAgo)->delete();
            Deleted_Employee::whereDate('created_at', '<', $thirtyDaysAgo)->delete();
        })->dailyAt('00:00');
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
