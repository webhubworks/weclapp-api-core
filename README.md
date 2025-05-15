# Weclapp API

## Generating the Weclapp API client
- Place the OpenAPI spec in `src/config/jane-openapi-php`.
- Run `ddev php vendor/bin/jane-openapi generate --config-file=./src/config/jane-openapi.php`
  - This will generate the API client in `app/Weclapp/generated`

## Usage
Example usage:
```php
<?php

use Webhub\Weclapp\Client;

class WeclappTest extends Command
{
    public function handle()
    {
        $weclappClient = Client::create();

        $result = $weclappClient->getArticleCount();

        ...
    }
}
```
