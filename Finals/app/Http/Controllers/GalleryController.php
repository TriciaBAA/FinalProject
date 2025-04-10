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
        $request->validate([
            'name' => 'required|string|max:100',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);
    
        PhotographerComment::create([
            'photographer_id' => $id,
            'name' => $request->name,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'user_id' => auth()->id(), // Associate the comment with the authenticated user
        ]);
    
        return back();
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
