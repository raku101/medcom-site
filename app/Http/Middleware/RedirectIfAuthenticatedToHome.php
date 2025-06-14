<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class RedirectIfAuthenticatedToHome extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return '/'; // إعادة التوجيه إلى الصفحة الرئيسية
        }
    }
}
