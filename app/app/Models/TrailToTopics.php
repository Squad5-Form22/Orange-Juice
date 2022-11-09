<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrailToTopics extends Model
{
    use HasFactory;

    public function trails() {
        return $this->belongsToMany('App\Models\Trail');
    }

    public function topics() {
        return $this->belongsToMany('App\Models\Topic');
    }
}
