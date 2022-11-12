<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'trail_id',
        'user_id',
        'trail_finished',
    ];

    public function trails() {
        return $this->hasOne(Trail::class, 'trail_id', 'id');
    }

    public function users() {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

}
