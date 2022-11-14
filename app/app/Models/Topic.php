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
    ];

    public function contents() {
        return $this->hasMany(Content::class, 'topic_id');
    }

    public function trails() {
        return $this->belongsToMany(
            Trail::class,
            'topic_trails',
            'topic_id',
            'trail_id',
        );
    }

    static function getAll(){
        $data = Topic::get();
        return $data;
    }

    static function getOne($id){
        $data = Topic::where('id',$id)->get();
        return $data;
    }

    static function saveOne($data){
        $result = Topic::create($data);
        return $result;
    }

    static function updateOne($data, $id = null) {
        $topic = Topic::findOrFail($id);        
        $result = $topic->update($data);
        return $result;
    }

    static function deleteOne($id){
        $result = Topic::where('id',$id)->delete();
        return $result;
    }
}
