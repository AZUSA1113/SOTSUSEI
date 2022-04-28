<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Finding;



class FindingController extends Controller
{
    //
    // $requestはフォームから送られてきたデータのことを指す
    public function FindingStore (Request $request){

        //登録の場合はこっち
        $Finding = new Finding();




        $Finding->foundname = $request->foundname; // フォームから送られてきたデータのうちstatusに該当する情報を使ってstatusカラム情報を書き換え
        $Finding->lat = $request->lat;
        $Finding->lng = $request->lng;
        $Finding->comment = $request->comment;
        $file = $request->file('image');
        $file_name = $request->file('image')->getClientOriginalName();
        $file_path = $file->storeAs('public/upload',$file_name);
        $Finding->image = str_replace('public/', '',$file_path);

        $Finding->save();//実行ボタンを押す操作。それにより本当にDBへのデータ保存・更新などが実行される。保存のときはsave、更新のときはupdate()などに

        return redirect('/DokokoHome')->with('flash_message','登録完了しました！');

    }
}
