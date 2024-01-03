<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Waredrobe;


class VoteController extends Controller

public function vote(Request $request, $designId)
{
    // Ensure the user is authenticated
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to vote.');
    }

    // Check if the user has already voted for this design
    $user = auth()->user();
    if ($user->votes()->where('design_id', $designId)->exists()) {
        return redirect()->back()->with('error', 'You have already voted for this design.');
    }

    // Record the vote in the database
    Vote::create([
        'user_id' => $user->id,
        'design_id' => $designId, // Make sure to include the design_id in the creation
    ]);

    return redirect()->back()->with('success', 'Vote submitted successfully!');
}
