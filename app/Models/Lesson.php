<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'link',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function complete()
    {
        return $this->hasMany(Complete::class);
    }

    public function indication()
    {
        return $this->hasMany(Indication::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
