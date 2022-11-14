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

    static function getAll(){
        $data = Content::get();
        return $data;
    }

    static function getOne($id){
        $data = Content::where('id',$id)->get();
        return $data;
    }

    static function saveOne($data){
        $result = Content::create($data);
        return $result;
    }

    static function updateOne($data, $id = null) {
        $content = Content::findOrFail($id);        
        $result = $content->update($data);
        return $result;
    }

    static function deleteOne($id){
        $result = Content::where('id',$id)->delete();
        return $result;
    }
}
