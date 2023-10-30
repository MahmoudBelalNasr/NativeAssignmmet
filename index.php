<?php

    include 'vendor/autoload.php';
    
    include 'app/GitHubAPI.php';

    $githubAPI = new GitHubAPI();

    $startDate = $_GET['startDate'] ?? '2020-01-01';
    $limit = $_GET['limit'] ?? 10;
    $language = $_GET['language'] ?? '';

    $repositories = $githubAPI->getRepositories($limit, $startDate, $language);

    include 'views/content.php';

?>


