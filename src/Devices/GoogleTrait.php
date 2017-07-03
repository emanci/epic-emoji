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

trait GoogleTrait
{
    use DeviceExchangeTrait;

    public function google()
    {
        return $this->deviceExchange('google');
    }
}
