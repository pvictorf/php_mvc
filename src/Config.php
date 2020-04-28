<?php
namespace src;

class Config {
    const BASE_DIR = '/var/www/html/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'mysql';
    const DB_DATABASE = 'dbdev';
    CONST DB_USER = 'root';
    const DB_PASS = 'rootpass';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}