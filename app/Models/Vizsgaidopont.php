<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vizsgaidopont extends Model
{
    use HasFactory;
    protected $fillable = [
        'targy',
        'tipus',
        'szoveg',
        'kezdes'
    ];
}
