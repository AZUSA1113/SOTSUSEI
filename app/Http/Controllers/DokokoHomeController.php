<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finding;

class DokokoHomeController extends Controller
{
    //
    public function DokokoHome(){

        // ここを追加
        $DokokoHome = "DokokoHome";
    
        //compactを追加
        return view('DokokoHome' ,compact('DokokoHome'));
}

    public function __inovoke(Request $request)
        {
            $Findings = Finding::all();
            $Findings = Finding::all()->sortByDesc("id");

            return view('DokokoHome',compact('Findings'));
                

        }

        public function DokokoSearch(Request $request){
            $keyword = $request->input('keyword');
            $Findings = Finding::where('foundname','LIKE',"%{$keyword}%")->get();

            return view('DokokoHome',compact('Findings','keyword'));
        }

}
