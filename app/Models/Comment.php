<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=['userID','comment'];
    public function comment(){
        return $this->belongsTo('App\Models\User');
    }

}
