<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judul extends Model
{
    Const TYPE_KUAN = 'kuan';
    Const TYPE_KUAL = 'kual';
    Const TYPE_RND = 'rnd';

    Const TYPE_CHOICE = [
        self::TYPE_KUAN => 'Kuantitatif',
        self::TYPE_KUAL => 'Kualitatif',
        self::TYPE_RND => 'Research And Development',
    ];

    use HasFactory;
    protected $fillable = [
        'title',
        'group',
        'student_id',
        'teacher_id',
        'last_seen'
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_at',
        'updated_at',
    ];

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'ID');
    }
    public function wpjs_users()
    {
        return $this->belongsTo(User::class, 'student_id', 'ID');
    }
    public function discussions()
    {
        return $this->hasMany(Discussion::class, 'theses_id', 'id');
    }
}
