<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills'; // Make sure this is correct

    protected $fillable = [
        'bidang',
        'posisikerja',
        'keahlian',
        'deskripsi',
        'keterampilan',
    ];
}

