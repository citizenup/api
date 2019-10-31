<?php
/**
 * Define the token table
 */
namespace Citizen\Authorization;

use Ethereal\Db\Column\Varchar;
use Ethereal\Db\TableInterface;
use Ethereal\Db\Column\DateTime;

/**
 * Table to house API Tokens
 */
class Table extends \Ethereal\Db\Table implements TableInterface
{
    protected $table;
    protected $rowClass = '\Citizen\Authorization\Token';

    /**
     * List of columns in the Database table
     *
     * @return void
     */
    protected function defineColumns()
    {
        $this->columns = [
            'id' => new Varchar('id', 'id'), //uuid
            'type' => new Varchar('type', 'type'), // Bearer or API_KEY  ??
            'key' => new Varchar('key', 'key'),
            'created' => new DateTime('created', 'created'),
            'expires' => new DateTime('expires', 'expires'),
        ];
    } 
}
