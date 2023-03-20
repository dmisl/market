<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function users_index()
    {
        $users = User::paginate(50);
        return view('admin.users.index', compact('users'));
    }
    public function users_show(User $user)
    {
        return view('admin.users.index', compact('user'));
    }
    public function users_update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email'],
            'is_admin' => ['required', 'boolean'],
            'email_verified_at' => ['date'],
            'created_at' => ['date'],
        ]);

        $user = User::find($request->id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;
        $user->email_verified_at = $request->email_verified_at;
        $user->created_at = $request->created_at;
        
        $user->save();

        return back()->with('alert', 'User has been successfully updated');
    }
    
    public function products_index()
    {
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }
    public function products_show(User $user)
    {
        return view('admin.products.index', compact('user'));
    }

    public function stats()
    {
        return view('admin.stats');
    }
}
