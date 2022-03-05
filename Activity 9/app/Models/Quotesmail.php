<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotesmail extends Model
{
    use HasFactory;

    protected $fillable = ['email'];
}
