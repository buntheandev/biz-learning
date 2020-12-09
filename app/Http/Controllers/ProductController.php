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
        // Validate before insert into database
        $this->validate($request, [
            'name'          => 'required|min:3',
            'price'         => 'required',
            'quantity'      => 'required',
            'description'   => 'required|min:2',
            'cost_of_good'  => 'required',
        ]);
        //get categories from input
        $categories = $request->categories;

        // get product information from input
        $data = array(
            'user_id'       => $request->user_id,
            'name'          => $request->name,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'description'   => $request->description,
            'cost_of_good'  => $request->cost_of_good,
        );

        // Checking if has image upload
        if ($request->image) {
            $data['image']      = $request->file('image')->store('uploads/products', 'custom');
        }

        // insert product information into database
        $product = Product::create($data);
        // insert categories into databsae
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

        $data = array(
            'name'          => $request->name,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'description'   => $request->description,
            'cost_of_good'  => $request->cost_of_good,
        );
        if ($request->image) {
            $data['image'] = $request->file('image')->store('uploads/products', 'custom');
        }

        $product = Product::find($id);

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
