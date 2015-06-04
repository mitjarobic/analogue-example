touch ./storage/testing/sqlite

php artisan migrate:refresh --database sqlite_testing

vendor/bin/phpunit tests/AnalogueTest


