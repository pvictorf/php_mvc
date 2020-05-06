<?php
namespace src;

class Config {
    const BASE_DIR = 'SEU_DIRETORIO/public';

    const DB_DRIVER   = 'mysql';
    const DB_HOST     = 'localhost';
    const DB_DATABASE = 'SUA_DATABASE';
    CONST DB_USER     = 'SEU_USER';
    const DB_PASS     = 'SEU_PASSWORD';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION   = 'index';

    const PDO_FETCH_MODE =  \PDO::FETCH_ASSOC; // \PDO::FETCH_OBJ;
    const PDO_DRIVER     = 'mysql';

}
