<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Superclasses;

/**
 * Description of Controller
 *
 * @author mathe
 */
class Controller {
    protected $view;
    
    public function __construct() {
        $this->view = new View();
    }
    
    
}
