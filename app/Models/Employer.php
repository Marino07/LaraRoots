<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory;
    public function jobs(){
        return $this->hasMany(Job::class); // one Employer can have many jobs
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
