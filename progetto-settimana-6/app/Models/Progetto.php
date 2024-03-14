<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progetto extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'year',
        'user_id',
        'attivita_id',
        'created_at',
        'updated_at'
    ];
}
