<?php

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['design'], 1, [
    'html_injection' => [
        'tables' => ['tl_html_injection'],
        'icon'   => 'bundles/terminal42htmlinjection/icon.png',
    ],
]);

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['modifyFrontendPage'][] = ['terminal42_html_injection.listener.html_injection', 'onModifyFrontendPage'];

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_html_injection'] = 'Terminal42\HtmlInjectionBundle\Model\HtmlInjectionModel';
