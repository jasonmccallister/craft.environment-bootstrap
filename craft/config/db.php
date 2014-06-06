<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

// Import the environment variables file path
$env = include '/path/to/your/.env.php';

return array(

    // The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
    'server'      => $env['APP_DB_SERVER'],

    // The database username to connect with.
    'user'        => $env['APP_DB_USER'],

    // The database password to connect with.
    'password'    => $env['APP_DB_PASSWORD'],

    // The name of the database to select.
    'database'    => $env['APP_DB_DATABASE'],

    // The prefix to use when naming tables. This can be no more than 5 characters.
    'tablePrefix' => $env['APP_DB_TABLE_PREFIX'],

);
