<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //この投稿をお気に入り登録しているユーザー
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'micropos_id', 'user_id')->withTimestamps();
    }    
}
