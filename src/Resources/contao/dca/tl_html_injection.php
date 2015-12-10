<?php

/**
 * Table tl_html_injection
 */
$GLOBALS['TL_DCA']['tl_html_injection'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'enableVersioning'            => true,
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('name'),
            'flag'                    => 1,
            'panelLayout'             => 'filter;search,limit'
        ),
        'label' => array
        (
            'fields'                  => array('name'),
            'format'                  => '%s'
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_html_injection']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_html_injection']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_html_injection']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_html_injection']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        'default'                     => '{name_legend},name,position,pages,code'
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'name' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_html_injection']['name'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
            'sql'                     => "varchar(255) NOT NULL default ''"
        ),
        'position' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_html_injection']['position'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'select',
            'options'                 => \System::getContainer()->get('terminal42_html_injection.html_injector')->getPositions(),
            'reference'               => &$GLOBALS['TL_LANG']['tl_html_injection']['positionRef'],
            'eval'                    => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
            'sql'                     => "char(1) NOT NULL default ''"
        ),
        'pages' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_html_injection']['pages'],
            'exclude'                 => true,
            'filter'                  => true,
            'inputType'               => 'pageTree',
            'eval'                    => array('mandatory'=>true, 'multiple'=>true, 'fieldType'=>'checkbox', 'csv'=>',', 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        ),
        'code' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_html_injection']['code'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'textarea',
            'eval'                    => array
            (
                'mandatory'    => true,
                'allowHtml'    => true,
                'preserveTags' => true,
                'class'        => 'monospace',
                'rte'          => 'ace|html',
                'tl_class'     => 'clr',
            ),
            'sql'                     => "mediumtext NULL"
        ),
    )
);
