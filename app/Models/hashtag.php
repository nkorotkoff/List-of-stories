<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hashtag extends Model
{
    protected $fillable = ['name'];
    public function historys(){
        return $this->belongsToMany(history::class);
    }
}
