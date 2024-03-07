<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadManager extends Controller
{
    //
    public function upload(Request $request){
        $file = $request->file("file");
    }
}
