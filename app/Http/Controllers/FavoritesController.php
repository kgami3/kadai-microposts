<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りに追加するアクション。
     * 
     * @param $id 投稿id
     * @return \Illuminate\Http\Response
     */
     public function store($id)
     {
         //認証済みユーザ（閲覧者）が、idのユーザの投稿をお気に入りに追加する
         \Auth::user()->favorite($id);
         //前のURLへリダイレクトさせる
         return back();
     }
     
    /**
     * 投稿をお気に入りから削除するアクション。
     * 
     * @param $id 投稿id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         //認証済みユーザ（閲覧者）が、idのユーザの投稿をお気に入りから削除する
         \Auth::user()->unfavorite($id);
         //前のURLへリダイレクトさせる
         return back();
     }
     
}
