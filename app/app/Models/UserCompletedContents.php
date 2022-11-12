<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCompletedContents extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content_id',
        'user_id',
    ];

    public function contents() {
        return $this->hasOne(Content::class, 'content_id', 'id');
    }

    public function users() {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

}
