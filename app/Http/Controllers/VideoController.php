<?php

namespace App\Http\Controllers;

use App\Services\GoogleYoutubeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VideoController extends Controller
{
    public function index()
    {
//        $data = (new GoogleYoutubeService());
//
//        dd($data);


        return view('video.index');
    }
}
