<?php
require_once 'vendor/autoload.php';
require_once 'Scraping.php';

use RoachPHP\Roach;

Roach::startSpider(Scraping::class);
