<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|max:2048',
    ]);

    $product = new Product();
    $product->title = $request->title;
    $product->slug = \Str::slug($request->title);
    $product->description = $request->description;
    $product->price = $request->price;
    $product->is_active = $request->has('is_active');
    $product->is_featured = $request->has('is_featured');

    // حفظ الصورة
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('uploads/products', 'public');
        $product->image = 'storage/' . $path;
    }

    $product->save();

    return redirect()->route('admin.products.index')->with('success', 'تمت إضافة المنتج بنجاح');
}


    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'price' => $request->price,
            'is_featured' => $request->has('is_featured'),
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('image')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'تم تعديل المنتج بنجاح');
    }

    public function destroy(Product $product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'تم حذف المنتج بنجاح');
    }
}
