<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('category.create')->with('success', 'successful');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        $data = array(
            'name' => $request->name,
        );

        Category::find($id)->update($data);

        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index');
    }
}
