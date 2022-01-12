<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'petgender_id',
        'user_id',
        'breed_id',
        'birthdate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function petgender()
    {
        return $this->belongsTo(PetGender::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
}
