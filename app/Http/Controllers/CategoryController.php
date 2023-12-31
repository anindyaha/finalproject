<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('kategori', ['categories'=> $categories]);
    }

    public function add()
    {
        return view('category-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100'
        ]);

        $category = Category::create($request->all());
        return redirect('kategori')->with('status', 'Kategori Berhasil Ditambahkan');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category-edit', ['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100'
        ]);

        $category = Category::where('slug',$slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('kategori')->with('status', 'Kategori Berhasil Diupdate');
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('kategori')->with('status', 'Kategori Berhasil Dihapus');
    }
}
