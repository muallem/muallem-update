<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_title',
        'lesson_id',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_at',
        'updated_at',
    ];

    protected $guarded = ['id'];

    public function lesson_details()
    {
        return $this->hasMany(lesson_details::class, 'lesson_title_id', 'id');
    }
}
