<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'link',
        'profile_user_id',
        'lesson_id'
    ];

    public function profile_user()
    {
        return $this->belongsTo(ProfileUser::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
