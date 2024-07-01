<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date', 'start', 'end'];

    public function user()
    { 
       return $this->belongsTo(User::class);
    }

    public function rests()
    {
         return $this->hasMany(Rest::class, 'work_id');
    }

    public function attendance()
    {
        return $this->belongsTo(Attendance::class, 'user_id', 'user_id');
    }

}
