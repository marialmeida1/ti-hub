<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    use HasFactory;

    public function profile_user() {
        return $this->belongsTo(ProfileUser::class);
    }

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }
}
