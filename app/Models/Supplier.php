<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'address',
        'phone_number',
        'email',
        'description'
    ];

    use HasFactory;
}
