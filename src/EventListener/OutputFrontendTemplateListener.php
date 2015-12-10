<?php

namespace Terminal42\HtmlInjectionBundle\EventListener;

use Terminal42\HtmlInjectionBundle\HtmlInjector;

class OutputFrontendTemplateListener
{
    /**
     * @var HtmlInjector
     */
    private $injector;

    /**
     * OutputFrontendTemplateListener constructor.
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
    public function adjustFrontendTemplate($buffer, $templateName)
    {
        if ($templateName === 'fe_page') {
            $buffer = $this->injector->updatePageBuffer($buffer, $GLOBALS['objPage']);
        }

        return $buffer;
    }
}