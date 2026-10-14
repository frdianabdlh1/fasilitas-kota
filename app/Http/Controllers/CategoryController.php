<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // READ: daftar kategori
    public function index()
    {
        $categories = Category::orderBy('name')->get();

        return view('categories.index', compact('categories'));
    }

    // CREATE: tampilkan form tambah
    public function create()
    {
        return view('categories.create');
    }

    // CREATE: simpan data baru
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index');
    }

    // DETAIL: tampilkan satu record
    public function show(string $category)
    {
        $item = Category::findOrFail($category);

        return view('categories.show', [
            'category' => $item,
        ]);
    }

    // EDIT: tampilkan form dengan data lama
    public function edit(string $category)
    {
        $item = Category::findOrFail($category);

        return view('categories.edit', [
            'category' => $item,
        ]);
    }

    // UPDATE: simpan perubahan
    public function update(Request $request, string $category)
    {
        $item = Category::findOrFail($category);

        $item->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index');
    }

    // DELETE: hapus record (hard delete)
    public function destroy(string $category)
    {
        $item = Category::findOrFail($category);
        $item->delete();

        return redirect()->route('categories.index');
    }
}