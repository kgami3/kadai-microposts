<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];
    
    /**
     * この投稿を所有するユーザ。（Userモデルとの関係を定義）
     */
     public function user()
     {
         return $this->belongsTo(User::class);
     }
     
    /**
     * このお気に入り投稿を所有するユーザ。（Userモデルとの関係を定義）
     */
     public function favorite_users()
     {
         //Modelクラス,中間テーブル,中間テーブルに保存されている自分のidを示すカラム名,関係先のidを示すカラム名
         return $this->belongsToMany(User::class, 'favorites','micropost_id', 'user_id');
     }
     
}
