<?php

namespace Terminal42\HtmlInjectionBundle\EventListener;

use Terminal42\HtmlInjectionBundle\HtmlInjector;

class HtmlInjectionListener
{
    /**
     * @var HtmlInjector
     */
    private $injector;

    /**
     * Constructor.
     *
     * @param HtmlInjector $injector
     */
    public function __construct(HtmlInjector $injector)
    {
        $this->injector = $injector;
    }

    /**
     * Adjust the front end template buffer
     *
     * @param string $buffer
     * @param string $templateName
     *
     * @return string
     */
    public function onModifyFrontendPage($buffer, $templateName)
    {
        if (0 === strpos($templateName, 'fe_')) {
            $buffer = $this->injector->updatePageBuffer($buffer, $GLOBALS['objPage']);
        }

        return $buffer;
    }
}
