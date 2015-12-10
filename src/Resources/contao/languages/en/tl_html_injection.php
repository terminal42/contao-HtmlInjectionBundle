<?php

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_html_injection']['name']     = ['Name', 'Please enter the injection name.'];
$GLOBALS['TL_LANG']['tl_html_injection']['position'] = ['Position', 'Please choose the injection position.'];
$GLOBALS['TL_LANG']['tl_html_injection']['pages']    = ['Pages', 'Please choose the injection pages.'];
$GLOBALS['TL_LANG']['tl_html_injection']['code']     = ['Code', 'Please enter the injection code.'];

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_html_injection']['name_legend'] = 'Name and position';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_html_injection']['positionRef'] = [
    \Terminal42\HtmlInjectionBundle\HtmlInjector::POSITION_HEAD_BOTTOM => 'Before &lt;/head&gt; tag',
    \Terminal42\HtmlInjectionBundle\HtmlInjector::POSITION_BODY_TOP    => 'After &lt;body&gt; tag',
    \Terminal42\HtmlInjectionBundle\HtmlInjector::POSITION_BODY_BOTTOM => 'Before &lt;/body&gt; tag',
];

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_html_injection']['new']    = ['New injection', 'Create a new injection'];
$GLOBALS['TL_LANG']['tl_html_injection']['show']   = ['Injection details', 'Show the details of injection ID %s'];
$GLOBALS['TL_LANG']['tl_html_injection']['edit']   = ['Edit injection', 'Edit injection ID %s'];
$GLOBALS['TL_LANG']['tl_html_injection']['copy']   = ['Duplicate injection', 'Duplicate injection ID %s'];
$GLOBALS['TL_LANG']['tl_html_injection']['delete'] = ['Delete injection', 'Delete injection ID %s'];
