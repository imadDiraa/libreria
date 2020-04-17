<?php

namespace src\model;

use src\model\Database;
use PDOStatement;

/**
 * Model base class
 */
class AbstractModel {

    /**
     * @var string $tableName
     */
    protected static $tableName;

    /**
     * @var string $entityClass
     */
    protected static $entityClass;

    /**
     * @var array $primaryKeys
     */
    protected static $primaryKeys = array();

    /**
     * @var array $foreignKeys
     */
    protected static $foreignKeys = array();

    /**
     * @var Database $database
     */
    protected static $database = NULL;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        if (static::$database == NULL) {
            static::$database = new Database();
        }
    }

    /**
     * findOneBy()
     *
     * @param array $proprieties which used to identify a record with AND logic
     * @return mixed|null
     * @throws \PDOException when the $proprieties are incorrect
     */
    public function findOneBy(array $proprieties) {
        $sql = 'SELECT * FROM ' . static::$tableName;
        if (count($proprieties)) {
            $sql .= ' WHERE ';
        }

        foreach ($proprieties as $propriety => $value) {
            $sql .= $propriety . " = '$value'";
            if (array_key_last($proprieties) != $propriety) {
                $sql .= ' AND ';
            }
        }

        $sql .= ' LIMIT 1;';

        /**
         * @var PDOStatement $statments
         */
        $statments = static::$database->query($sql);

        if ($statments) {
            $entity = $statments->fetchObject(static::$entityClass);
            if ($entity)
                return $entity;
            return NULL;
        } else {
            throw new \PDOException(static::$database->errorInfo()[2], static::$database->errorInfo()[1]);
        }
    }

    /**
     * findBy()
     *
     * @param array $proprieties which used to identify a record with AND logic
     * @return array
     * @throws \PDOException when the $proprieties are incorrect
     */
    public function findBy(array $proprieties) {
        $sql = 'SELECT * FROM ' . static::$tableName;
        if (count($proprieties)) {
            $sql .= ' WHERE ';
        }
        foreach ($proprieties as $propriety => $value) {
            $sql .= $propriety . " = '$value'";
            if (array_key_last($proprieties) != $propriety) {
                $sql .= ' AND ';
            }
        }

        /**
         * @var PDOStatement $statments
         */
        $statments = static::$database->query($sql);

        if ($statments) {
            return $statments->fetchAll(Database::FETCH_CLASS, static::$entityClass);
        } else {
            throw new \PDOException(static::$database->errorInfo()[2], static::$database->errorInfo()[1]);
        }
    }

    /**
     * findBy()
     *
     * @return array
     */
    public function findAll() {
        $sql = 'SELECT * FROM ' . static::$tableName;

        /**
         * @var PDOStatement $statments
         */
        $statments = static::$database->query($sql);

        return $statments->fetchAll(Database::FETCH_CLASS, static::$entityClass);
    }
}