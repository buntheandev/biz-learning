<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('orders.index', compact('products'));
    }
}
