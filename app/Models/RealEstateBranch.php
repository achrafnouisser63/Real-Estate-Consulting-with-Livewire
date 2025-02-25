<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateBranch extends Model
{
    protected $table = 'real_estate_branches';

    protected $fillable = [
        'name',
        'is_active'
    ];



    use HasFactory;
}
