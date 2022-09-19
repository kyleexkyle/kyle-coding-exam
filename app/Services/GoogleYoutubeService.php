<?php


namespace App\Services;


use Google\Client;
use Google\Service\YouTube;

class GoogleYoutubeService
{
    public $client;
    public $service;

    public function __construct()
    {
        $this->client = $this->getClient();
        $this->service = new YouTube($this->client);

    }

    public function getClient()
    {
        $client = new Client();
        $client->setApplicationName('youtube-api');
        $client->setRedirectUri(route('youtube'));
        $client->setScopes(YouTube::YOUTUBE);
        $client->setAuthConfig(storage_path('credentials.json'));
    }

    public function readVideo()
    {
    }
}
