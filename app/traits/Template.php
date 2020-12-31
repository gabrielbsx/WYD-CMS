<?php

namespace app\traits;

use Exception;
use Slim\Views\Twig;

trait Template
{
    public function getTwig()
    {
        try {
            return Twig::create(DIR_VIEWS);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function setView($name)
    {
        return $name . EXT_VIEWS;
    }
}
