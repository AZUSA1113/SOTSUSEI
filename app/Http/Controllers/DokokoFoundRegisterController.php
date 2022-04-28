<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finding;

class DokokoFoundRegisterController extends Controller
{
    //
    public function DokokoFoundRegister(){

        // ここを追加
        $DokokoFoundRegister = "DokokoFoundRegister";
    
        //compactを追加
        return view('DokokoFoundRegister' ,compact('DokokoFoundRegister'));
}

    public function __inovoke(Request $request)
    {
        $Findings = Finding::all();
        dd($Findings);

        return view('Finding.DokokoHome')
            ->with('name','laravel')
            ->with('version','8');
    }
}

