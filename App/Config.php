<?php

namespace App;

/**
 * Application configuration
 * PHP version 7.4
 */
class Config
{
    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvc_database';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'mvc_user';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'secret';

    /**
     * Show or hide error messages on browser
     * @var boolean
     */
    const SHOW_ERRORS = false;

}