<?php

echo __DIR__.'/../schema/weclapp-openapi.json';

return [
    'openapi-file' => __DIR__.'/../schema/weclapp-openapi.json',
    'namespace' => 'Weclapp\Generated',
    'directory' => __DIR__.'/../generated',
    'whitelisted-paths' => [
        '\/article',
    ],
];
