<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id())
        {
            $user_type = Auth()->user()->usertype;
            if($user_type == 'admin')
            {
                return view('admin.index');
            }
            else if($user_type == 'user')
            {
                return view('home.index');
            }
        }
        else{
            return redirect->back();
        }
    }

    public function log_out(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
 
        return redirect('/');
    }
    public function products()
    {
        $products = Product::all();
        return view('admin.products',compact('products'));
    }
}
