<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'job',
        'image',
        'followers',
        'followings',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function post() {
        return $this->hasMany(Post::class);
    }

    public function complete() {
        return $this->hasMany(Complete::class);
    }

    public function indication() {
        return $this->hasMany(Indication::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    public function like() {
        return $this->hasMany(Like::class);
    }

    public function deslike() {
        return $this->hasMany(Deslike::class);
    }
}
