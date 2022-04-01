<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;
use Tags;

class Courses extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'courses',
        'avatar',
        'description',
        'price',
    ];

    public function Tags()
    {
        return $this->belongsToMany(Tags::class, 'courses_tags', 'id_tags', 'id_courses');
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_courses', 'id_courses', 'id_user');
    }
    public function teacherCourses()
    {
        return $this->belongsToMany(User::class, 'teacher_courses', 'id_courses', 'id_user');
    }
}
