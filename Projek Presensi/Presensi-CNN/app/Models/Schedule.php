<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'major_id',
        'class_id',
        'sub_id',
        'teach_id',
        'id',
        'date',
        'jam_mulai',
        'jam_selesai',
        'status',
    ];

    public function major()
    {
        return $this->belongsTo(Majors::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
    
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'sub_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teach_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
    
    public function students()
    {
        return $this->belongsToMany(User::class, 'attendances')->withPivot('status', 'attendance_date', 'check_in_time');
    }
}
