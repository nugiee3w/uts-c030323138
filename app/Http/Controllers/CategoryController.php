<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Menampilkan semua kategori
    public function index()
    {
        // Mengambil semua kategori dari database
        $categories = Category::all();

        // Mengembalikan view dengan data kategori
        return view('categories.index', compact('categories'));
    }

    // Menampilkan form untuk menambah kategori
    public function create()
    {
        return view('categories.create');
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'name' => 'required|string|unique:categories,name',
            'description' => 'nullable|string',
        ]);

        // Menyimpan kategori baru ke database
        Category::create($request->all());

        // Redirect ke halaman kategori
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    // Menampilkan kategori tertentu
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    // Menampilkan form untuk mengedit kategori
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Memperbarui kategori
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'name' => 'required|string|unique:categories,name,' . $id,
            'description' => 'nullable|string',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    // Menghapus kategori
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}

