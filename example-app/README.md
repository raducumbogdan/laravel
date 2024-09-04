# This is a test for plenty/logger package

- To run the project make sure you configure in your .env the MYSQL details
- Run command `composer install`
- Run command `php artisan migrate`

- To disable the mysql logging or to enable/disable other drivers go into `config/plentylogger.php` and do the necessary changes

- To do a test log do a GET request to: `/api/test-logger`

- You should find the logs in the `logs` DB table and also in the /storage/logs/plentylogger.log

# THANKS !
