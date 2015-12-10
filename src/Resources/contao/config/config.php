<?php

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['design'], 1, [
    'html_injection' => [
        'tables' => ['tl_html_injection'],
        'icon'   => 'bundles/terminal42htmlinjectionbundle/icon.png',
    ],
]);

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = ['terminal42_html_injection.listener.output_frontend_template', 'adjustFrontendTemplate'];

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_html_injection'] = 'Terminal42\HtmlInjectionBundle\HtmlInjectionModel';
