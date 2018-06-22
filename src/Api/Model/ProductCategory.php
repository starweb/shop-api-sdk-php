<?php

namespace Starweb\Api\Model;

class ProductCategory
{
    protected static $apiToDbFieldsMap = [
        'parentId'      => ['type' => 'int', 'dbField' => 'parentId', 'default' => null],
        'visibility'    => ['type' => 'string'],
        'sortIndex'     => ['type' => 'int', 'dbField' => 'sortIndex'],
        'openPage'      => ['type' => 'bool', 'dbField' => 'openPage'],
        'imageFileId'   => ['type' => 'int', 'dbField' => 'imageFileId', 'default' => null],
        'externalType'  => ['type' => 'string', 'maxLength' => 20, 'dbField' => 'externalType'],
        'externalId'    => ['type' => 'string', 'maxLength' => 40, 'dbField' => 'externalId'],
    ];

    protected static $apiToDbFieldsMapReadOnly = [
        'categoryId'    => ['type' => 'int', 'dbField' => 'categoryId'],
        'hasChildren'   => ['type' => 'bool'],
    ];

}
