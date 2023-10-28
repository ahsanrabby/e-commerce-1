<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    private static $comment;
    public static function newComment($request)
    {
        self::$comment = new Comment();
        self::$comment->name        = $request->name;
        self::$comment->product_id        = $request->product_id;
        self::$comment->email        = $request->email;
        self::$comment->comments = $request->review;
        self::$comment->save();
    }

}
