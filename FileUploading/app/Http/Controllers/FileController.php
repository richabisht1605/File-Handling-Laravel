<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $fileName = time()."ws.".$request->file('img')->getClientOriginalExtension();
        // echo $fileName;
             
        //laravel apne aap naam dega yha
      echo $request->file('img')->storeAs('uploads', $fileName);
    }
}
