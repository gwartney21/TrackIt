<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;

    protected $fillable = ['JobName','JobRole','JobLink','JobInfo','status'];

    public function jobs()
    {
        return $this->belongsTo(User::class);
    }
}
