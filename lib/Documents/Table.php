<?php
namespace Citizen\Documents;

use Ethereal\Db\Table as TableAbstract;
use Ethereal\Db\TableInterface;

class Table extends TableAbstract implements TableInterface
{
    protected $table = 'documents';
    protected $rowClass = 'Citizen\Documents\Row';
}
