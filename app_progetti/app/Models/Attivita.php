<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attivita extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'priority',
        'start_date',
        'end_date',
        'project_id',
        'created_at',
        'updated_at'
    ];
}
