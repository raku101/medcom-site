<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Product;
use App\Models\Page;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $servicesCount = Service::count();
        $productsCount = Product::count();
        $pagesCount = Page::count();
        
        return view('admin.dashboard', compact('servicesCount', 'productsCount', 'pagesCount'));
    }
}
