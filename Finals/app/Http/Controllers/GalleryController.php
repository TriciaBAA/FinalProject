<?php

namespace App\Http\Controllers;

use App\Models\Photographer;
use App\Models\PhotographerComment;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $photographers = Photographer::with('comments')->get();
        return view('gallery', compact('photographers'));
    }

    public function storeComment(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:100', // Ensure the name is provided
            'comment' => 'required|string', // Ensure the comment is not empty
            'rating' => 'required|integer|min:1|max:5', // Rating must be between 1 and 5
        ]);

        // Create the comment using the PhotographerComment model
        PhotographerComment::create([
            'photographer_id' => $id,
            'name' => $request->name, // Take the 'name' from the request
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        // Optionally, redirect back with a success message
        return back()->with('success', 'Comment added successfully!');
    }
    
    // Edit Comment
    public function editComment(Request $request, $commentId)
    {
        $comment = PhotographerComment::findOrFail($commentId);

        // Make sure the comment belongs to the logged-in user (optional)
        // if (auth()->user()->id !== $comment->user_id) {
        //     abort(403);
        // }

        $comment->update([
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return back();
    }

    // Delete Comment
    public function deleteComment($commentId)
    {
        $comment = PhotographerComment::findOrFail($commentId);

        // Make sure the comment belongs to the logged-in user (optional)
        // if (auth()->user()->id !== $comment->user_id) {
        //     abort(403);
        // }

        $comment->delete();

        return back();
    }
}
