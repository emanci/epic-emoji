<?php

/*
 * This file is part of Epic Emoji.
 *
 * (c) emanci <zhengchaopu@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Emanci\EpicEmoji\Devices;

class Kddi extends AbstractDevice
{
    use DocomoTrait, GoogleTrait, SoftbankTrait, UnifiedTrait;

    /**
     * Unique device Identifier.
     *
     * @var string
     */
    protected $deviceIdentifier = 'kddi';
}
