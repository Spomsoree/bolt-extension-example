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

use Lulububu\BaseExtension\BaseExtension;

/**
 * Class TestExtension
 *
 * @author Joshua Schumacher <joshua@lulububu.de>
 *
 * @package Lulububu\TestExtension
 */
class TestExtension extends BaseExtension
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Lulububu Test Extension';
    }

    /**
     * @param bool $cli
     *
     * @return void
     */
    public function initialize(bool $cli = false): void
    {
        $this->addTwigNamespace('test');
    }
}
