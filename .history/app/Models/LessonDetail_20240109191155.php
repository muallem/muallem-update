<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_body',
        'lesson_title_id',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_at',
        'updated_at',
    ];

    protected $guarded = ['id'];

    public function lesson_titles()
    {
        return $this->hasMany(KwitansiDetail::class, 'kwitansi_id', 'id')->orderBy('created_at', 'desc');
    }
}
