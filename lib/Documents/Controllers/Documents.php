<?php
namespace Citizen\Documents\Controller;

use \Citizen\Controller\Api;
use \Citizen\Documents\Model\Documents as DosumentTable;

class Documents extends Api
{

    protected $type = 'document';
    protected $table;

    protected function beforeAction()
    {
        parent::beforeAction();
        $this->table = new DocumentsTable;
    }

    public function create()
    {
        throw new \Citizen\CitizenException('Can not create from here');
    }
}
