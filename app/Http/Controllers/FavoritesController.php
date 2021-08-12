<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    
    public function store($micropost_id)
    {

        // 認証済みユーザ（閲覧者）が、 micropost_idの投稿をお気に入り登録する
        \Auth::user()->favorite($micropost_id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    public function destroy($micropost_id)
    {
        // 認証済みユーザ（閲覧者）が、 micropost_idの投稿をお気に入り登録からはずす
        \Auth::user()->unfavorite($micropost_id);
        // 前のURLへリダイレクトさせる
        return back();
    }

}
