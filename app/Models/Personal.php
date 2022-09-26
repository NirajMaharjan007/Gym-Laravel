<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Personal extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'dob',
    //     'address',
    //     'residence',
    //     'picture'
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}