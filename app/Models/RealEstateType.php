<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RealEstateType extends Model
{
    protected $table = 'real_estate_types';

    protected $fillable = [
        'name',
        'is_active'
    ];
}
