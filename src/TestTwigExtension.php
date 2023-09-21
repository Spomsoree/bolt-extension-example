<?php

//  _        _      _         _
// | |  _  _| |_  _| |__ _  _| |__ _  _
// | |_| || | | || | '_ \ || | '_ \ || |
// |____\_,_|_|\_,_|_.__/\_,_|_.__/\_,_|
//
// Copyright © Lulububu Software GmbH - All Rights Reserved
// https://lulububu.de
//
// Unauthorized copying of this file, via any medium is strictly prohibited!
// Proprietary and confidential.

namespace Lulububu\TestExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class TestTwigExtension
 *
 * @author Joshua Schumacher <joshua@lulububu.de>
 *
 * @package Lulububu\TestExtension
 */
class TestTwigExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction(
                'testMethod',
                [$this, 'testMethodAction']
            ),
        ];
    }

    /**
     * @return string
     */
    public function testMethodAction(): string
    {
        return 'Hello World!';
    }
}
