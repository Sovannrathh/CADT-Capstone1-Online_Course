<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "title",
        "description",
        "price",
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function lessons() {
        return $this->hasMany(Lesson::class, 'course_id');
    }
}
