<?php

namespace src\model;

use src\model\AbstractModel;

class LibriModel extends AbstractModel
{
    /**
     * @var string $tableName
     */
    protected static $tableName = 'libri';

    /**
     * @var string $entityClass
     */
    protected static $entityClass = Libro::class;

    /**
     * @var array $primaryKeys
     */
    protected static $primaryKeys;

    /**
     * LibriModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
