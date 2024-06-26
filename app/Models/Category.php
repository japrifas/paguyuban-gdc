<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\MonthsOfYear;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'pemasukan',
        'image'
    ];

    protected $casts = [
        'month_of_year' => MonthsOfYear::class
    ];
}
