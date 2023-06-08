<?php

namespace Core;

class  controllers
{
    public $params = [];
    public function __construct($params)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $this->params = $params;
    }
}
