<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_user_id',
        'post_id',
        'comment_id'
    ];

    public function profile_user()
    {
        return $this->belongsTo(ProfileUser::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Comment::class);
    }
}
