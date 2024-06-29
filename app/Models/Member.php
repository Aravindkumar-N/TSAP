<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'postalcode',
        'membership_type',
        'payment_plan',
        'interests',
        'comments',
    ];
    protected $casts = [
        'interests' => 'array',
    ];
}
