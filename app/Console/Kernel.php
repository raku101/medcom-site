<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        // يمكنك إضافة أوامر مجدولة هنا
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        $this->commands([
            \App\Console\Commands\GenerateServiceViews::class,
        ]);

        require base_path('routes/console.php');
    }
}
