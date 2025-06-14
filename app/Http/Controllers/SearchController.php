<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;

class SearchController extends Controller
{
    public function suggest(Request $request)
    {
        $query = $request->get('query');

        // البحث في المنتجات
        $products = Product::where('name', 'like', "%{$query}%")->limit(5)->get();

        // البحث في الخدمات
        $services = Service::where('name', 'like', "%{$query}%")->limit(5)->get();

        // بناء HTML للاقترحات
        $html = '';

        if ($products->count() > 0) {
            $html .= '<div class="px-3 py-1 text-xs text-gray-500 dark:text-gray-400">🔎 نتائج في المنتجات</div>';
            foreach ($products as $product) {
                $html .= '<a href="' . url('/products/' . $product->slug) . '" 
                            class="block px-3 py-1.5 text-sm text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-slate-700 rounded">
                            🛒 ' . e($product->name) . '
                          </a>';
            }
        }

        if ($services->count() > 0) {
            $html .= '<div class="px-3 py-1 text-xs text-gray-500 dark:text-gray-400 mt-2">🛠️ نتائج في الخدمات</div>';
            foreach ($services as $service) {
                $html .= '<a href="' . url('/services/' . $service->slug) . '" 
                            class="block px-3 py-1.5 text-sm text-gray-800 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-slate-700 rounded">
                            🛠️ ' . e($service->name) . '
                          </a>';
            }
        }

        if ($products->count() === 0 && $services->count() === 0) {
            $html .= '<div class="px-3 py-2 text-sm text-gray-500 dark:text-gray-400">لم يتم العثور على نتائج.</div>';
        }

        return $html; // ✅ إعادة HTML فقط، بدون JSON
    }
}
