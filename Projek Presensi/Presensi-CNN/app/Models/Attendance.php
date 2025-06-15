<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'id',
        'schedule_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function schedule() 
    {
        return $this->belongsTo(Schedule::class);
    }

    public function student()
{
    return $this->belongsTo(Student::class, 'user_id', 'user_id');
}

}
