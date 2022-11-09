<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'status',
        // 'trail_id',
    ];

    public function contents() {
        return $this->hasMany('App\Models\Content');
    }

    public function trails() {
        return $this->belongsToMany(
            Trail::class,
            'trail_to_topics',
            'trail_id',
            'topic_id'
        );
    }
}
