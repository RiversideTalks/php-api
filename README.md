# php-api
API wrapper for Riverside Rocks in PHP


## Example

```php
<?php

require 'vendor/autoload.php';

use RiversideRocks\RiversideTalks as Chat;

Chat::auth("your_api_key");

Chat::sendMessage("hello!", "general");
```