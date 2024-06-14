<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'start',
        'end',
        'user_id'
    ];

    public function user()
    { 
       return $this->belongsTo(User::class);
    }

    public function rests()
    {
         return $this->hasMany(Rest::class, 'work_id');
    }

}
