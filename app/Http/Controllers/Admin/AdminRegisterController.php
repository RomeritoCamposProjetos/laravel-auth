<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function create () {
        return view('auth.admin.register');
    }

    public function store (Request $request) {
        
        $request->validate([
            'name' => ['required'],
            'email'=> ['required','email','unique:admins'],
            'password' => ['required','confirmed','min:8'],           
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('admin')->login($admin);
        
        return redirect()->to(route('admin.panel'));
        
    }
}
