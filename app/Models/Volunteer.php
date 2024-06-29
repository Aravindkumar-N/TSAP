<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'gender',
        'address',
        'city',
        'postalcode',
        'interests', // Assuming interests is stored as JSON in the database
        'avail',
    ];
    protected $casts = [
        'interests' => 'json', // Cast interests attribute to JSON
    ];
}
