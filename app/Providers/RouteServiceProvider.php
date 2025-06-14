<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{  public const HOME = '/';
    public function boot(): void
{
    $this->routes(function () {
        // مسارات الويب العامة
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // مسارات API
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        // ✅ مسارات لوحة التحكم تحت /admin
        Route::middleware('web')
            ->prefix('admin')
            ->group(base_path('routes/admin.php'));
    });
}

}
