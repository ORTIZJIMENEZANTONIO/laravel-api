<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function getComments(Request $request)
    {
        $comments = Comment::get();

        return !empty($comments) && count($comments) > 0
            ? (CommentResource::collection($comments))->response()
            : response()->json(['success' => false, 'message' => 'Not data available']);
    }
}