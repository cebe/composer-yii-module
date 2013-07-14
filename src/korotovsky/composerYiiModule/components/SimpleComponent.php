<?php
/**
 * @author Dmitry Korotovsky <dmitry.korotovsky@gmail.com>
 * @copyright 2013
 * @license The BSD 3-Clause License http://opensource.org/licenses/BSD-3-Clause
 */

namespace korotovsky\composerYiiModule\components;


class SimpleComponent extends \CComponent {
    public function init()
    {
        echo 'hello!';
    }
}
