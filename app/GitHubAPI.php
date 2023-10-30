<?php

use GuzzleHttp\Client as HttpClient;

class GitHubAPI {

    private $client;

    public function __construct() {
        $this->client = new HttpClient();
    }

    public function getRepositories($limit, $startDate, $language) {
        $url = "https://api.github.com/search/repositories?q=created:>$startDate+language:$language&per_page=$limit&sort=stars";
        $response = $this->client->get($url);
        $data = json_decode($response->getBody(), true);
        return $data['items'];
    }
}