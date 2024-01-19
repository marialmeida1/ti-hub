<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'image',
        'profile_user_id'
    ];

    public function profile_user()
    {
        return $this->belongsTo(ProfileUser::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
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
