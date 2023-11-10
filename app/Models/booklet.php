<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booklet extends Model
{
    use HasFactory;

    protected $fillable = [
        "BookTitle",
        "BookStocks",
        "BookAuthors"
    ];
}
