<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    use HasFactory;
    protected $fillable=[
        'mark1',
        'mark2',
        'mark3',
    ];
}
