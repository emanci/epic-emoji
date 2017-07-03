<?php

/*
 * This file is part of Epic Emoji.
 *
 * (c) emanci <zhengchaopu@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Emanci\EpicEmoji;

interface DictionaryInterface
{
    /**
     * Returns the name of the shorthand dictionary.
     *
     * @param string $name
     *
     * @return array
     */
    public function shorthandDict($name);

    /**
     * Returns the name of the unicode dictionary.
     *
     * @param string $name
     *
     * @return array
     */
    public function unicodeDict($name);

    /**
     * Returns the name of the html dictionary.
     *
     * @param string $name
     *
     * @return array
     */
    public function htmlDict($name);
}
