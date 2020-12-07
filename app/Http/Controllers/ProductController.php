<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('quantity', 'asc')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|min:3',
            'price'         => 'required',
            'quantity'      => 'required',
            'description'   => 'required|min:2',
        ]);
        $categories = $request->categories;

        $data = array(
            'user_id'       => $request->user_id,
            'name'          => $request->name,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'description'   => $request->description,
        );
        if ($request->image) {
            $data['image'] = $request->file('image')->store('uploads/products', 'custom');
        }
        $product = Product::create($data);

        $product->categories()->attach($categories);

        return redirect()->route('product.create')->with('success', 'successful');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $categories = $request->categories;
        // $name           = $request->name;
        // $price          = $request->price;
        // $quantity       = $request->quantity;
        // $description    = $request->description;

        $data = array(
            'name'          => $request->name,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'description'   => $request->description,
        );
        if ($request->image) {
            $data['image'] = $request->file('image')->store('uploads/products', 'custom');
        }

        $product = Product::find($id);

        // $product->name          = $name;
        // $product->price         = $price;
        // $product->quantity      = $quantity;
        // $product->description   = $description;
        $product->save();
        $product->update($data);
        $product->categories()->sync( $categories );

        return redirect()->route('product.edit', $id)->with('success', 'successful')->withInput();

    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product')->with('success', 'successful');
    }
}
