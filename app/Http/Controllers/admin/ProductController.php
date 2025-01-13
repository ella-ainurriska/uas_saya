<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;

class ProductController extends Controller
{
    public function index() {
        $products =Product::with('category')->get();
        return view('layouts.pages.products.index',[
            "products" => $products,
        ] );
    }

    public function create() {
        $categories = Category::all();

        return view('layouts.pages.products.create',[
            "categories" => $categories,
        ]);

    }

    public function store(Request $request)
    {
      
    
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'Stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'SKU' => 'required|string|unique:products,SKU',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        // Simpan data ke database setelah validasi
        Product::create([
            "name" => $request->input('name'),
            "price" => $request->input('price'),
            "Stock" => $request->input('Stock'),
            "description" => $request->input('description'),
            "SKU" => $request->input('SKU'),
            "category_id" => $request->input('category_id'),
        ]);
        
        
        // Redirect ke halaman produk
        return redirect('/products');
    }

    public function edit($id) {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        return view('layouts.pages.products.edit',[
            "categories" => $categories,
            "product" => $product,
        ]);

    }

    public function update(Request $request, $id)
    {
      
    
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'Stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'SKU' => 'required|string|unique:products,SKU',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        // Simpan data ke database setelah validasi
        Product::where('id', $id)->update([
            "name" => $request->input('name'),
            "price" => $request->input('price'),
            "Stock" => $request->input('Stock'),
            "description" => $request->input('description'),
            "SKU" => $request->input('SKU'),
            "category_id" => $request->input('category_id'),
        ]);
        
        
        // Redirect ke halaman produk
        return redirect('/products');
    }
    
      public function delete($id) {
        $product = Product::where('id' , $id);
        $product->delete();

        return redirect('/products');
      } 
}

