<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    public $timestamps = true;
    protected $fillable = ['id', 'post_id', 'user_id', 'title', 'content'];

}