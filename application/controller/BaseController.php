<?php

abstract class BaseController {
    protected $pdo = null;    
    protected $title;
    public function __construct() {        
        $this->pdo = PDOLib::getInstance()->getPdo();        
    }
}