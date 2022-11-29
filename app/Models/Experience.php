<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'company', 'tipo', 'pageurl', 'giturl', 'from', 'to'];

    public function tools () {
        return $this->belongsToMany(Tool::class);
    }
}
