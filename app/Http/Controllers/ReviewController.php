<?php
namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string',
        ]);

        $user = User::firstOrCreate(
            ['email' => $request->user_email],
            ['name' => $request->user_name]
        );

        $user->reviews()->create([
            'book_id' => $request->book_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Avis ajouté avec succès.');
    }
}
