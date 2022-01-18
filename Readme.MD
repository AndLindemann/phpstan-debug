To reproduce:

1) Do composer install for top-level /composer.json
2) Do composer install for include/composer.json
3) Run .\vendor\bin\phpstan.bat analyse --level 6 --configuration phpstan.neon --memory-limit 8G --debug wwwroot/test.php

PHP version used: php 7.4.27 Windows non-thread-safe x64 build.
