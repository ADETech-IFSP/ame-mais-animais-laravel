<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetGender extends Model
{
    use HasFactory;

    protected $fillable = [
        'initials',
        'value'
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
