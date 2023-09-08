<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Videogame extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'release_date', 'genre', 'cover', 'description', 'publisher', 'serial_number', 'rating'];
    protected $dates = ['deleted_at'];

    public function consoles()
    {
        return $this->belongsToMany(Console::class);
    }
}
