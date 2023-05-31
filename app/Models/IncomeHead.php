<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeHead extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'income_head',
        'created_at',

    ];
}
