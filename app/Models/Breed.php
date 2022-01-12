<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specie_id',
    ];

    public function specie()
    {
        return $this->belongsTo(Specie::class);
    }
}
