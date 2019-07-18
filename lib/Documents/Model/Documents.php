<?php
namespace Citizen\Documents\Model;

use Ethereal\Db\Table;

class Documents extends Table implements \Ethereal\Db\TableInterface
{
    /**
     * Database table name
     * @var string
     */
    protected $table = 'documents';

    /**
     * FQCN for row class
     * @var string
     */
    protected $rowClass = '\Citizen\Documents\Model\Document';

    /**
     * array of columns in the table
     * @todo make this uneeded. we can fetch the list from the table
     * @var array
     */
    protected $columns = array(
        'documentId',
        'title'
    );

    /**
     * Fetch documents related to a certain tag
     * @method getByTag
     * @param  string   $tag tag identifier
     * @return array         array of Document(s)
     */
    public function getByTag($tag)
    {
        $ids = array();
        foreach (\Citizen\Tags\Model\Tags::getRelationsByTag($tag) as $relation) {
            
        }
        $search = $this->select();
    }
}
