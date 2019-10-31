<?php
namespace Citizen\Documents;

use Ethereal\Db\Table as TableAbstract;
use Ethereal\Db\TableInterface;

class Table extends TableAbstract implements TableInterface
{
    protected $table = 'documents';
    protected $rowClass = 'Citizen\Documents\Row';

    /**
     * Implement a new column
     *
     * @param string $name
     * @param string $label
     * @param bool $private
     * @param bool $nullable
     * @param bool $required
     * default false false true
     */
    protected function defineColumns()
    {
        $this->columns = [
            'agencyAconym' => new \Ethereal\Db\Column\Integer('agencyAconym', 'Agency Acronym'),
            'allowLateComment' => new \Ethereal\Db\Column\Boolean('allowLateComment', 'Allow Late Comment'),
            'attachmentCount' => new \Ethereal\Db\Column\Varchar('attachmentCount', 'Attachment Count'),
            'commentDueDate' => new \Ethereal\Db\Column\DateTime('commentDueDate', 'Comment Due Date'),
            'commentStartDate' => new \Ethereal\Db\Column\DateTime('commentStartDate', 'Comment Start Date'),
            'docketId' => new \Ethereal\Db\Column\Varchar('docketId', 'Docket Id'),
            'docketTitle' => new \Ethereal\Db\Column\Varchar('docketTitle', 'Docket Title'),
            'docketType' => new \Ethereal\Db\Column\Varchar('docketType', 'Docket Type'),
            'frNumber' => new \Ethereal\Db\Column\Varchar('frNumber', 'FR Number'),
            'numberOfCommentsRecieved' => new \Ethereal\Db\Column\Varchar('numberOfCommentsRecieved', 'Number Of Comments Recieved'),
            'openForComment' => new \Ethereal\Db\Column\Boolean('openForComment', 'Open For Comment'),
            'postedDate' => new \Ethereal\Db\Column\DateTime('postedDate', 'Posted Date'),
            'rin' => new \Ethereal\Db\Column\Varchar('rin', 'rin'),
            'title' => new \Ethereal\Db\Column\Varchar('title', 'Title'),
            'tags' => new \Ethereal\Db\Column\JSON('tags', 'Tags'),
            'comments' => new \Ethereal\Db\Column\JSON('comments', 'Comments'),
        ];
    }

    public funtion getAllDocs()
    {
        return $this->fetchAll();
    }
}
