<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string',
        ]);

        Review::create([
            'name' => $request->name,
            'initial' => mb_substr($request->name, 0, 1),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'تم إرسال تقييمك بنجاح!');
    }
}

