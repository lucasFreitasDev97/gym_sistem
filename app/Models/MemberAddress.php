<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberAddress extends Model
{
    protected $table = 'member_addresses';

    protected $fillable = [
        'country',
        'state',
        'city',
        'neighborhood',
        'street',
        'complement',
        'number',
    ];
}
