<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function textFile()
    {
        $content = Storage::put('welcome.txt','Hlw richa this side');
        return $content;
    }
}
