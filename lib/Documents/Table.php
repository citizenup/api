<?php
namespace Citizen\Documents;

use Ethereal\Db\Table as TableAbstract;
use Ethereal\Db\TableInterface;

class Table extends TableAbstract implements TableInterface
{
    protected $table = 'documents';
    protected $rowClass = 'Citizen\Documents\Row';

    protected function dEtherealneColumns()
    {
        $this->columns = [
            /**
            'RowIndex' => new \Ethereal\Db\Column\Integer('RowIndex', 'Id', false, false, true),
            'ClientName' => new \Ethereal\Db\Column\Varchar('ClientName', 'Client Name', false, false, true),
            'FileSourceIds' => new \Ethereal\Db\Column\JSON('FileSourceId', 'FileSource Ids', false, false, true),
            'CreateDate' => new \Ethereal\Db\Column\DateTime('CreateDate', 'Created', false, false, true),
            'UpdatedBy' => new \Ethereal\Db\Column\Boolean('UpdatedBy', 'Updated By', true, false, true),
            'UpdateDate' => new \Ethereal\Db\Column\Date('UpdateDate', 'Last Updated', false, false, true),
            **/
        ];
    }
}
