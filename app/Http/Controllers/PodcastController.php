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
        $resultAry = $PodcastCrawler->get(__('[Sleepless nights with half a bottle of vinegar] Movies, animations, games and those years'));
        foreach ($resultAry['podcasts'] as $podcast) {
            echo __('iTunes ID: ') . $podcast['itunes_id'] . PHP_EOL;
            echo __('Title: ') . $podcast['title'] . PHP_EOL;
            echo __('Author: ') . $podcast['author'] . PHP_EOL;
            echo __('Image: ') . $podcast['image'] . PHP_EOL;
            echo __('Episodes: ') . $podcast['episodes'] . PHP_EOL;
        }
    }
}
