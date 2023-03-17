<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home.index');
    }
}
