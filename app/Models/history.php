<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    protected $table = 'historys';
    protected $fillable = ['name','descr'];
    public function hashtags(){
        return $this->belongsToMany(hashtag::class)->withPivot('hashtag_id');
    }
}
