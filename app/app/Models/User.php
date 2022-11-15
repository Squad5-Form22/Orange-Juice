<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contents() {
        return $this->belongsToMany(
            Content::class,
            'content_users',
            'user_id',
            'content_id',
        );
    }

    static function getAll(){
        $data = User::get();
        return $data;
    }

    static function getOne($id){
        $data = User::where('id',$id)->get();
        return $data;
    }

    static function saveOne($data){
        $data['password'] = Hash::make($data['password']);
        $result = User::create($data);
        return $result;
    }

    static function updateOne($data, $id = null) {
        $user = User::findOrFail($id);
        if($data['password']) {
            $result = $user->password = Hash::make($data['password']);
        } else {
            $result = $user->update($data);
        }
        return $result;
    }

    static function deleteOne($id){
        $result = User::where('id',$id)->delete();
        return $result;
    }
}