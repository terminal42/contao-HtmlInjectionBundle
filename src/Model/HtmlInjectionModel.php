<?php

namespace Terminal42\HtmlInjectionBundle\Model;

use Contao\Database;
use Contao\Model;

class HtmlInjectionModel extends Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_html_injection';

    /**
     * Find the record by page ID
     *
     * @param int $pageId
     *
     * @return \Model\Collection|null
     */
    public static function findByPage($pageId)
    {
        $t = static::$strTable;

        return static::findBy(["FIND_IN_SET(?, $t.pages)"], $pageId);
    }
}