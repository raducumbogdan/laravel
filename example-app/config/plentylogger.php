<?php

return [

    'drivers' => [
//        'cli' => [],
        'file' => [
            'path' => storage_path('logs/plentylogger.log'),
        ],
        'mysql' => [
            'connection' => env('DB_CONNECTION', 'mysql'),
            'table' => 'logs',
        ],
//        'mysql' => [ // We can use below configuration if we want logs in a custom database
//            'host' => env('DB_LOG_HOST', '127.0.0.1'),
//            'port' => env('DB_LOG_PORT', '3306'),
//            'database' => env('DB_LOG_DATABASE', 'your_log_database'),
//            'username' => env('DB_LOG_USERNAME', 'your_log_user'),
//            'password' => env('DB_LOG_PASSWORD', 'your_log_password'),
//            'table' => 'plenty_log_entries', // The table name where logs will be stored
//        ],
//        'elk' => [ // I don't have time to test this
//            'hosts' => [
//                env('ELK_HOST', 'localhost:9200')
//            ]
//        ],
    ],

];
