<?php

namespace Terminal42\HtmlInjectionBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Terminal42\HtmlInjectionBundle\Terminal42HtmlInjectionBundle;

class Plugin implements BundlePluginInterface
{

    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(Terminal42HtmlInjectionBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
