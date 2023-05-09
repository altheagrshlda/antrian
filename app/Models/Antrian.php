<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $fillabel = [
        'no_antrian',
        'poli',
        'tanggal_antrian',
    ];

    public $incrementing = true;
}
