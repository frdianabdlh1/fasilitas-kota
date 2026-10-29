<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // READ: daftar kategori + pencarian + pagination
    public function index(Request $request)
    {
        $search = $request->query('q');

        $categories = Category::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orderBy('name')
            ->paginate(5)
            ->withQueryString();

        return view('categories.index', compact('categories', 'search'));
    }

    // CREATE: tampilkan form tambah
    public function create()
    {
        return view('categories.create');
    }

    // CREATE: validasi lalu simpan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:500',
        ]);

        Category::create($validated);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
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

    // UPDATE: validasi lalu simpan perubahan
    public function update(Request $request, string $category)
    {
        $category = Category::findOrFail($category);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:500',
        ]);

        $category->update($validated);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    // DELETE: hapus record
    public function destroy(string $category)
    {
        $category = Category::findOrFail($category);
        $category->delete();

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}