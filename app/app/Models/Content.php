<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'author',
        'type',
        'url',
        'status',
        'topic_id'
    ];

    public function topic() {
        return $this->belongsTo('App\Models\Topic');
    }
}
