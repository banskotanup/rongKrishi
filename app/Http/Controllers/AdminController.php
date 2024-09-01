<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

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
    public function AddNewProduct(Request $data)
    {
        $product = new Product();
        $product->title=$data->input('title');
        $product->price=$data->input('price');
        $product->type=$data->input('type');
        $product->quantity=$data->input('quantity');
        $product->category=$data->input('category');
        $product->description=$data->input('description');
        $product->picture=$data->file('file')->getClientOriginalName();
        $data->file('file')->move('uploads/products/', $product->picture);
        $product->save();
        return redirect()->back()->with('success','Congratulation! New Product Added Successfully.');
    }
    public function category_page()
    {
        $data = Category::all();
     return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data = new Category;
        $data->cat_title = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function cat_delete($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }
    public function update_category(Request $request,$id)
    {
        $data = Category::find($id);
        $data->cat_title = $request->cat_name;
        $data->save();
        return redirect('/category_page')->with('message', 'Category Updated Successfully');
    }
}
