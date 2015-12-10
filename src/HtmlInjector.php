<?php

namespace Terminal42\HtmlInjectionBundle;

use Contao\CoreBundle\Framework\ContaoFrameworkInterface;
use Contao\PageModel;
use Terminal42\HtmlInjectionBundle\Model\HtmlInjectionModel;

class HtmlInjector
{
    const POSITION_HEAD_BOTTOM = 1;
    const POSITION_BODY_TOP = 2;
    const POSITION_BODY_BOTTOM = 3;

    /**
     * @var ContaoFrameworkInterface
     */
    private $framework;

    /**
     * Injector constructor.
     *
     * @param ContaoFrameworkInterface $framework
     */
    public function __construct(ContaoFrameworkInterface $framework)
    {
        $this->framework = $framework;
    }

    /**
     * Get the available positions
     *
     * @return array
     */
    public function getPositions()
    {
        return [
            self::POSITION_HEAD_BOTTOM,
            self::POSITION_BODY_TOP,
            self::POSITION_BODY_BOTTOM,
        ];
    }

    /**
     * Update the particular page buffer
     *
     * @param string    $buffer
     * @param PageModel $pageModel
     *
     * @return string
     */
    public function updatePageBuffer($buffer, PageModel $pageModel)
    {
        $injectionModels = $this->framework->getAdapter('Terminal42\HtmlInjectionBundle\Model\HtmlInjectionModel')->findByPage($pageModel->id);

        if ($injectionModels !== null) {
            /** @var HtmlInjectionModel $injectionModel */
            foreach ($injectionModels as $injectionModel) {
                $buffer = $this->injectCode($buffer, $injectionModel->code, $injectionModel->position);
            }
        }

        return $buffer;
    }

    /**
     * Inject the code to buffer at given position
     *
     * @param string $buffer
     * @param string $code
     * @param int    $position
     *
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function injectCode($buffer, $code, $position)
    {
        switch ($position) {
            case self::POSITION_HEAD_BOTTOM:
                return str_replace('</head>', $code . "\r\n</head>", $buffer);

            case self::POSITION_BODY_TOP:
                return preg_replace('/(<body[^>]*>)/', "$1\r\n" . $code, $buffer);

            case self::POSITION_BODY_BOTTOM:
                return str_replace('</body>', $code . "\r\n</body>", $buffer);

            default:
                throw new \InvalidArgumentException(sprintf('The position "%s" is invalid!', $position));
        }
    }
}