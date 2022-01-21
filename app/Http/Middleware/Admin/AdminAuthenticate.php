<?php

namespace App\Http\Middleware\Admin;

use Illuminate\Auth\Middleware\Authenticate;

class AdminAuthenticate extends Authenticate
{    
    protected function redirectTo ($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login');
        }
    }
}
