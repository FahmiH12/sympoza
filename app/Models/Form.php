<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'topik_conference',
        'nama_conference',
        'nama_paper',
        'link_conference',
        'tempat',
        'waktu',
        'deadline',
        'path',
    ];
}
