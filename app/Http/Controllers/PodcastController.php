<?php

namespace App\Http\Controllers;

use PodcastCrawler\PodcastCrawler;
use PodcastCrawler\Provider\Itunes;

class PodcastController extends Controller
{
    /**
     * Search the profile.
     *
     * @return void
     */
    public function search()
    {
        $PodcastCrawler = new PodcastCrawler(new Itunes);
        $resultAry = $PodcastCrawler->get('百靈果news');
        foreach ($resultAry['podcasts'] as $podcast) {
            echo 'iTunes 編號：' . $podcast['itunes_id'] . PHP_EOL;
            echo '標題：' . $podcast['title'] . PHP_EOL;
            echo '作者：' . $podcast['author'] . PHP_EOL;
            echo '圖片：' . $podcast['image'] . PHP_EOL;
            echo '集數：' . $podcast['episodes'] . PHP_EOL;
        }
    }
}
