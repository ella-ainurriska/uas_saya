<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        $products =Product::with('category')->get();
        return view('layouts.pages.products.index',[
            "products" => $products,
        ] );
    }

    public function create() {
        return view('layouts.pages.products.create');
    }
}
