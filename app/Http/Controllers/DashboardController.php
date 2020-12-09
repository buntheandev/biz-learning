<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::count();
        $categories = Category::count();
        $users      = User::count();
        $orders     = Order::count();
        return view('index', compact('products', 'categories', 'users', 'orders'));
    }
}
