<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class PagesController extends Controller
{
    public function addCategory(){
        $cat = category::all();
        return view('addCategory')->with('cat', $cat);
    }

    public function addProduct(){
        $cat = category::all();
        return view('addProduct')->with('cat', $cat);
    }

    public function productList(){
        $pro = product::all();
        return view('list')->with('pro', $pro);
    }

    public function category(){
        return product::with('products')->get();
    }

    public function addCategorySubmit(Request $req){

        $cat = new category();
        $cat->category = $req->category;
        $cat->save();

        return redirect()->route('addCategory');
    }

    public function addProductSubmit(Request $req){

        $pro = new product();
        $pro->name = $req->name;
        $pro->category = $req->category;
        $pro->quaintity = $req->quaintity;
        $pro->save();

        return redirect()->route('productList');
    }
}
