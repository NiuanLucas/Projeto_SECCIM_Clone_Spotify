<?php

namespace App\Superclasses;

//Classe para chamar as páginas de view e setar varáveis que você for usar

class View {
    private $data = [];
    private $folder;
    
    public function __construct() {
        $this->folder = DIR.DS."App".DS."Views".DS;
    }
    
    public function set($key, $value){
        $this->data[$key] = $value;
    }
    
    public function render($file){
        $filename = $this->folder.$file.".php";
        if (file_exists($filename)) {
            extract($this->data);
            include $filename;
        }
    }
}
