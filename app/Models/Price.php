<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public function User()
    {
        $this->belongsTo(User::class);
    }

    public function classes()
    {
        return $this->hasOne(Classes::class);
    }
}