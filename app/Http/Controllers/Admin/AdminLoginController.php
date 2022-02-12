<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {

    }
    
    public function create () {
        return view('auth.admin.register');
    }

    public function store (Request $request) {

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->to(route('admin.panel'));
        } else {
            return redirect()->back ()->withInput($request->only('email'));
        }

    }

    public function destroy(Request $request) {

        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->to(route('landing'));

    }

}
