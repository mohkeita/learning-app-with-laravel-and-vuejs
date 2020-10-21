<?php

namespace App\Models;

use App\Models\User;
use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function episodes() {
        return $this->hasMany(Episode::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
