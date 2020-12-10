<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Auth;
class OrderController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->all();
        return view('orders.index', compact('products'));
    }

    // select all orders from databae with join with users and products
    public function order_listing()
    {
        $orders = Order::Join('users', 'orders.user_id', 'users.id')
            ->join('products', 'orders.product_id', 'products.id')
            ->select('orders.*', 'users.name', 'products.image')
            ->orderBy('id', 'desc')
            ->get();

        return view('orders.listing', compact('orders'));
    }

    // insert order into database
    public function order_submit($product_id)
    {
        $product = Product::find($product_id);
        $user      = Auth::user();

        $order  = Order::create([
            'product_id'    => $product->id,
            'user_id'       => $user->id,
            'amount'        => $product->price,
            'discount'      => 0,
            'cost_of_good'  => $product->cost_of_good,
            'total'         => $product->price * 1,
            'product_name'  => $product->name
        ]);

        $product->quantity = $product->quantity - 1;
        $product->save();

        return redirect()->route('order');
    }
}
