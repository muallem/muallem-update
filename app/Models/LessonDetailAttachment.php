<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonDetailAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_detail_id',
        'title',
        'body',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_at',
        'updated_at',
    ];

    protected $guarded = ['id'];

    public function lesson()
    {
        return $this->belongsTo(LessonDetail::class, 'lesson_detail_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(LessonDetailStatus::class, 'id', 'lesson_detail_id');
    }

}
