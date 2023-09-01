<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category()
    {
        return view('Books.categories');
    }

    public function save_category(Request $req)
    {
        $validated = $req->validate([
            'category' => ['required']
        ]);

        $cat = new Category();
        $cat->Category = $validated['category'];
        $cat->save(); 

        $req->session()->flash('message','Category added');

        return view('Books.categories');
    }
}
