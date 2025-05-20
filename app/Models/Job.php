<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Relasi ke User (pemilik job)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
