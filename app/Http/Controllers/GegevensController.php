<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class GegevensController extends Controller
{
    public function index()
    {
        $test = Shop::find(1);
        $info = Shop::join('products', 'products.shop_id', '=', 'shops.id')->get();
        return view('gegevens.index', compact('info', 'test'));
    }
}
