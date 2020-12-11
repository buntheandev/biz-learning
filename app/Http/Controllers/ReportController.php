<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class ReportController extends Controller
{
    public function index()
    {

        // $last_week             = date('Y-m-d', strtotime('-7 days')); I'm try this but it's not working I use Carbon instead
        $new_orders            = Order::where('created_at', '>=', Carbon::now()->isWeekday())->count();
        $sale_orders           = Order::where('created_at', '>=', Carbon::now()->isWeekday())->sum('total');
        $cost_of_goods         = Order::where('created_at', '>=', Carbon::now()->isWeekday())->sum('cost_of_good');
        $profits               = $sale_orders - $cost_of_goods;

        // $daily                = date('Y-m-d', strtotime('-1 days')); I'm try this but it's not working I use Carbon instead
        $tomorrow_new_orders     = Order::where('created_at', Carbon::now()->yesterday())->count();
        $tomorrow_sale_orders    = Order::where('created_at', Carbon::now()->yesterday())->sum('total');
        $tomorrow_cost_of_goods  = Order::where('created_at', Carbon::now()->yesterday())->sum('cost_of_good');
        $tomorrow_profits        = $tomorrow_sale_orders  -  $tomorrow_cost_of_goods;

        // $daily                = date('Y-m-d', strtotime('-1 days')); I'm try this but it's not working I use Carbon instead
        $daily_new_orders     = Order::where('created_at', '>=', Carbon::now()->today())->count();
        $daily_sale_orders    = Order::where('created_at', '>=', Carbon::now()->today())->sum('total');
        $daily_cost_of_goods  = Order::where('created_at', '>=', Carbon::now()->today())->sum('cost_of_good');
        $daily_profits        = $daily_sale_orders  -  $daily_cost_of_goods;



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
            'stock_value',

            'tomorrow_new_orders',
            'tomorrow_sale_orders',
            'tomorrow_cost_of_goods',
            'tomorrow_profits'
        ));
    }

}
