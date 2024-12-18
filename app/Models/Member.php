<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'cpf', 'rg', 'birthdate', 'phone', 'email'];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
