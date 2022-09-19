<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Services\GoogleYoutubeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VideoController extends Controller
{
    public function index()
    {
        $searchedVideo = Youtube::getVideoInfo('BL1E-cPZQ6A');
        $relatedVideos = Youtube::getRelatedVideos('BL1E-cPZQ6A');


        if (isset($_GET['search'])) {
            $firstVideo = Youtube::searchVideos($_GET['search'])[0];

            $searchedVideo = Youtube::getVideoInfo($firstVideo->id->videoId);

            $relatedVideos = Youtube::getRelatedVideos($firstVideo->id->videoId);
        }

        if (isset($_GET['video'])) {
            $video = Youtube::getVideoInfo($_GET['video']);

            $searchedVideo = Youtube::getVideoInfo($video->id);

            $relatedVideos = Youtube::getRelatedVideos($video->id);
        }


        return view('video.index',compact('searchedVideo','relatedVideos'));
    }
}
