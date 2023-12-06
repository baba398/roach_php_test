<?php
require_once 'vendor/autoload.php';

use RoachPHP\Http\Response;
use RoachPHP\Spider\BasicSpider;

class Scraping extends BasicSpider
{
    public array $startUrls = [
        'https://roach-php.dev/docs/spiders'
    ];

    public function parse(Response $response): Generator
    {
        $title = $response->filter('h1')->text();

        $subtitle = $response
            ->filter('main > div:nth-child(2) p:first-of-type')
            ->text();

        yield $this->item([
            'title' => $title,
            'subtitle' => $subtitle,
        ]);
    }
}