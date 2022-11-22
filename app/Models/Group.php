<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    //protected $guarded = ['id'];
    protected $fillable = ['title', 'description'];

    public function posts () {
        return $this->hasMany(Post::class);
    }
}
