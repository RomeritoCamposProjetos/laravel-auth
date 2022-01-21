<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    
    public function create () {
        
    }

    public function store (Request $request) {

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->to(route('admin.panel'));
        } else {
            return redirect()->back ()->withInput($request->only('email'));
        }

    }

}
