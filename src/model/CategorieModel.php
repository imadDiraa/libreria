<?php

namespace libreria\Model;

include_once 'AbstractModel.php';
include_once '..\entity\Categoria.php';

use libreria\AbstractModel;

class CategorieModel extends AbstractModel
{
    /**
     * @var string $tableName
     */
    protected static string $tableName = 'reparti';

    /**
     * @var string $entityClass
     */
    protected static string $entityClass = Categoria::class;

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
