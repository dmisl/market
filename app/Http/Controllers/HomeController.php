<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function autocomplete(Request $request)
    {
        $search = $request->input('search');
        $result = User::query()->where('name', 'LIKE', '%'.$search.'%')->get();
        return response()->json($result);
    }
}
