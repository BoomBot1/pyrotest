<?php

require __DIR__ . '/vendor/autoload.php';

use TestPackage\SiteMapGenerator;

$generator = new SiteMapGenerator(
    [
        [
            'loc' => 'https://www.site.com/',
            'changefreq' => 'daily',
            'priority' => 1.0,
            'lastmod' => new DateTime('now'),
        ],
        [
          'loc' => 'https://www.site.com/uri',
          'changefreq' => 'weekly',
          'priority' => 0.5,
          'lastmod' => new DateTime('now'),
        ],
        [
            'loc' => 'https://www.site.com/uri2',
            'changefreq' => 'hourly',
            'priority' => 0.1,
            'lastmod' => new DateTime('now'),
        ],
    ],
    'json',
    __DIR__ . '/test/file.json',
);

$generator->generate();