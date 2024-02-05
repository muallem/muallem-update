<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function updateLastSeen(){
        $this->last_seen = Carbon::now();
        $this->save();
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'ID');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function wp_users()
    {
        return $this->belongsTo(User::class, 'student_id', 'ID');
    }
    public function discussions()
    {
        return $this->hasMany(Discussion::class, 'theses_id', 'id');
    }
}
