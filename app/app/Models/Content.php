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
        'name',
        'theme',
        'duration',
        'url',
        'author',
        'type',
        'status',
        'topic_id'
    ];

    public function topics() {
        return $this->hasMany(Topic::class, 'topic_id');
    }
}
