<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products()
    {
        return view('gegevens.products', [
            'products' => Product::with('shop')->get()
        ]);
    }
}
