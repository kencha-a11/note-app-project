<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $fillable = [
        'reminder'
    ];

    // public function users()
    // {
    //     $this->belongsTo(User::class);
    // }
}
