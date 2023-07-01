<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pedigree',
        'birthdate',
        'photo',
        'owner_id',
        'description',
    ];

    public function owner()
{
    return $this->belongsTo(Owner::class, 'owner_id');
}

}
