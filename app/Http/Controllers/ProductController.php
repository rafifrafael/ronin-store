<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->get();
        return view('home', ['product' => $product]);
    }

    public function buy($id)
    {
        $product = Product::find($id);
        return view('buy', compact('product'));
    }
}
