<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_jurusan',
    ];

    public function classes()
    {
        return $this->hasMany(Classes::class, 'major_id');
    }
    
    public function subjects() {
        return $this->hasMany(Subject::class);
    }
}
