<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
class ReportController extends Controller
{
     public function index()
    {
        //Report by weekly
        $last_week             = date('Y-m-d', strtotime('-7 days'));
        $new_orders            = Order::where('created_at', '>=', $last_week)->count();
        $sale_orders           = Order::where('created_at', '>=', $last_week)->sum('total');
        $cost_of_goods         = Order::where('created_at', '>=', $last_week)->sum('cost_of_good');
        $profits               = $sale_orders - $cost_of_goods;

        // Report by daily
        $daily                = date('Y-m-d', strtotime('-1 days'));
        $daily_new_orders     = Order::where('created_at', '>=',  $daily)->count();
        $daily_sale_orders    = Order::where('created_at', '>=',  $daily)->sum('total');
        $daily_cost_of_goods  = Order::where('created_at', '>=',  $daily)->sum('cost_of_good');
        $daily_profits        = $sale_orders - $cost_of_goods;

        // Ckeck stock value and quantity
        $stock_value_quantity = Product::sum('quantity');

        $products             = Product::get();
        $stock_value = 0;
        foreach($products as $product)
        {
            $stock_value      += $product['qnantity'] * $product['cost_of_good'];
        }

        return view('reports.index', compact(
            'new_orders',
            'sale_orders',
            'cost_of_goods',
            'profits',
            'daily_new_orders',
            'daily_sale_orders',
            'daily_cost_of_goods',
            'daily_profits',
            'stock_value_quantity',
            'stock_value'
        ));
    }
}
