<?php
namespace app\controllers;

use app\controllers\Base;

class Home extends Base
{
    public function index ($request, $response)
    {
        return $this->getTwig()->render($response, $this->setView('blog/pages/home'), [
            'title' => 'WYD Valland',
            'name' => 'Gabriel Silva'
        ]);
    }
}