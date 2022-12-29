<?php

declare(strict_types=1);

namespace Nip\View;

use Nip\View;

class XML extends View
{
    public function load($view = false, $variables = [], $return = false)
    {
        header('Content-type: text/xml');

        return parent::load($view, $variables, $return);
    }

    /**
     * Singleton.
     *
     * @return self
     */
    public static function instance()
    {
        static $instance;
        if (!($instance instanceof self)) {
            $instance = new self();
        }

        return $instance;
    }
}
