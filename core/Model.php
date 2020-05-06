<?php
namespace core;

use \src\Config;
use \core\Database;
use \ClanCats\Hydrahon\Builder;
use \ClanCats\Hydrahon\Query\Sql\FetchableInterface;


class Model {

    protected static $_h;
    protected static $table = '';

    public function __construct() {
        self::_checkH();
    }

    public static function _checkH() {
        if(self::$_h == null) {
            $connection = Database::getInstance();
            self::$_h = new Builder(Config::PDO_DRIVER, function($query, $queryString, $queryParameters) use($connection) {
                $statement = $connection->prepare($queryString);
                $statement->execute($queryParameters);

                if ($query instanceof FetchableInterface)
                {
                    return $statement->fetchAll(Config::PDO_FETCH_MODE);
                }
            });
        }
        self::$_h = self::$_h->table( self::getTableName() );
    }

    public static function getTableName() {

        $className = get_called_class();

        if(empty($className::$table)) {
            throw new \Exception('Error: you need declare atribute [protected $table] in model [' . $className . ']');
        }
        return $className::$table;
    }

    public static function select($fields = []) {
        self::_checkH();
        return self::$_h->select($fields);
    }

    public static function insert($fields = []) {
        self::_checkH();
        return self::$_h->insert($fields);
    }

    public static function update($fields = []) {
        self::_checkH();
        return self::$_h->update($fields);
    }

    public static function delete() {
        self::_checkH();
        return self::$_h->delete();
    }

}
