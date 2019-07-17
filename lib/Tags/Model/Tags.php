<?php
namespace Citizen\Tags\Model;

use Ethereal\Db\Table;

class Tags extends Table implements \Ethereal\Db\TableInterface
{
    /**
     * return relation objects for the tag
     * @method getRelationsByTag
     * @param  string            $tag tag id
     * @return array                  array of relations
     */
    public static function getRelationsByTag($tag)
    {
        
    }
}
