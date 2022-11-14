<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function topics() {
        return $this->belongsToMany(
            Topic::class,
            'topic_trails',
            'trail_id',
            'topic_id',
        );
    }

    static function getAll(){
        $data = User::get();
        return $data;
    }

    static function getOne($id){
        $data = Trail::where('id',$id)->get();
        return $data;
    }

    static function saveOne($data){
        $result = Trail::create($data);
        return $result;
    }

    static function updateOne($data, $id) {
        $trail = Trail::findOrFail($id);
        $result = $trail->update($data);
        return $result;
    }

    static function deleteOne($id){
        $result = Trail::where('id',$id)->delete();
        return $result;
    }
}
