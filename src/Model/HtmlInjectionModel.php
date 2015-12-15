<?php

namespace Terminal42\HtmlInjectionBundle\Model;

use Contao\Model;

/**
 * HtmlInjectionModel
 *
 * @property int    $tstamp
 * @property string $name
 * @property string $position
 * @property string $pages
 * @property string $code
 */
class HtmlInjectionModel extends Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_html_injection';

    /**
     * Find records by page ID
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
