<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'file_name',
        'kode_materi',
        'student_id',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_at',
        'updated_at',
    ];
    protected static function boot()
    {
        parent::boot();

        self::created(function ($model) {
        });
    }

    protected $guarded = ['id'];
}
