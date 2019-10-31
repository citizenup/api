<?php
namespace Citizen\Documents\Controller;

use \Citizen\Controller\Api;
use \Citizen\Documents\Model\Documents as DosumentTable;

/**
 * Undocumented class
 */
class Documents extends Api
{

    protected $type = 'document';
    protected $table;

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function beforeAction()
    {
        parent::beforeAction();
        $this->table = new DocumentsTable;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function create()
    {
        throw new \Citizen\CitizenException('Can not create from here');
    }
}
