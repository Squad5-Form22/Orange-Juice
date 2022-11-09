<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    use HasFactory;

    /**contentcontent    /**contentcontent    /**    /**contentcontent
    /**contentcontent
contentcontent    /**contentcontent    /**con    /**contentcontent
tentcontent








     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status',
    ];

    public function topics() {
        return $this->belongsToMany('App\Models\Topic');
    }
}
