<?php

namespace libreria\Model;

use src\model\AbstractModel;

class CategorieModel extends AbstractModel
{
    /**
     * @var string $tableName
     */
    protected static $tableName = 'reparti';

    /**
     * @var string $entityClass
     */
    protected static $entityClass = Categoria::class;

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
