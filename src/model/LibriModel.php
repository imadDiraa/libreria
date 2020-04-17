<?php

namespace src\model;

include_once 'AbstractModel.php';
include_once 'entity\Libro.php';

use src\model\AbstractModel;

class LibriModel extends AbstractModel
{
    /**
     * @var string $tableName
     */
    protected static string $tableName = 'libri';

    /**
     * @var string $entityClass
     */
    protected static string $entityClass = Libro::class;

    /**
     * @var array $primaryKeys
     */
    protected static array $primaryKeys;

    /**
     * LibriModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
