<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'chapter',
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
        return $this->hasMany(LessonDetail::class, 'lesson_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
