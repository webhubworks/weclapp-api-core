<?php

echo 'Generating the new client...'.PHP_EOL;

return [
    'openapi-file' => __DIR__.'/../schema/weclapp-openapi.json',
    'namespace' => 'Webhubworks\WeclappApiCore',
    'directory' => __DIR__.'/../src',
    'strict' => false, // Weclapp API declares values as e.g. string, but null is actually returned.
    /*'whitelisted-paths' => [
        '\/article',
    ],*/
];
