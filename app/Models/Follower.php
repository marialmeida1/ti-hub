<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Follower extends Model
{
    use HasFactory;

    protected $fillable = [
        'follower_id',
        'following_id'
    ];

    public function follower()
    {
        return $this->belongsTo(ProfileUser::class, 'follower_id');
    }

    public function following()
    {
        return $this->belongsTo(ProfileUser::class, 'following_id');
    }
}
