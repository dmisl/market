<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'max:50'],
            'password' => ['required', 'string', 'max:100'],
            'remember' => ['nullable'],
        ]);
        
    }
}
