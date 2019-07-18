<?php
namespace Citizen\Tags;

use Ethereal\Db\Table as TableAbstract;
use Ethereal\Db\TableInterface;

class Table extends TableAbstract implements TableInterface
{
    protected $table = 'tags';
    protected $rowClass = 'Citizen\Tags\Row';
}
