<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class PagesController extends Controller
{
    public function addCategory(){
        return view('addCategory');
    }

    public function addProduct(){
        return view('addProduct');
    }

    public function addCategorySubmit(Request $req){

        $cat = new category();
        $cat->category = $req->category;
        $cat->save();

        return view('addCategory');
    }
}
