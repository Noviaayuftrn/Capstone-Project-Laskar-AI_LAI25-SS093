<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'major_id',
        'class_id',
        'id',
        'nama_mapel',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
     public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
