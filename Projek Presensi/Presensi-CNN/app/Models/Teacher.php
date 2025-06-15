<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'class_id',
        'major_id',
        'id',
        'nip',
        'sub_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function schedules() 
    {
    return $this->hasMany(Schedule::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class); 
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'sub_id');
    }
}

