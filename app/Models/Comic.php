<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory;

    // laravel fornisce degli strumenti e proprietà che permettono di gestire la soft delete,
    // quindi dobbiamo solo farla ereditare con i traits
    use SoftDeletes;
}
