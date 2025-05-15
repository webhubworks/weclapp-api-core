<?php

echo "Generating the new client...".PHP_EOL;

return [
    'openapi-file' => __DIR__.'/../schema/weclapp-openapi.json',
    'namespace' => 'Webhub\Weclapp',
    'directory' => __DIR__.'/../src',
    'whitelisted-paths' => [
        '\/article',
    ],
];
