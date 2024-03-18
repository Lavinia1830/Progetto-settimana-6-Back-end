<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Progetto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'language',
        'state',
        'user_id',
        'attivita_id',
        'created_at',
        'updated_at'
    ];

    public function progettos(): HasMany {
        return $this->hasMany(Progetto::class);
    }
}
