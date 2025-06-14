<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Review;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $orderedSlugs = [
            'kamyrat-almrakb',
            'anthm-althkm-fy-aldkhol',
            'anthm-almnazl-althky',
            'alanthm-alsoty-oalbsry',
            'alshbkat-oalbny-althty',
            'aaamal-alkhrbaaa'
        ];

        $services = Service::whereIn('slug', $orderedSlugs)
            ->get()
            ->sortBy(function ($service) use ($orderedSlugs) {
                return array_search($service->slug, $orderedSlugs);
            });

        $reviews = Review::latest()->take(10)->get(); // تقييمات العملاء

        return view('home', compact('services', 'reviews'));
    }
}

