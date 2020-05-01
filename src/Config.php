<?php
namespace src;

class Config {
    const BASE_DIR = '/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'dbdev';
    const DB_USER = 'root';
    const DB_PASS = 'rootpass';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}
