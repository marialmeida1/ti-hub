<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'profile_user_id',
        'post_id',
        'lesson_id',
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
        return $this->belongsTo(Lesson::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }

    public function deslike()
    {
        return $this->hasMany(Deslike::class);
    }
}
