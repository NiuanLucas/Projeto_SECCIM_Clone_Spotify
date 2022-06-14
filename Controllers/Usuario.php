<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\Models\Usuario as ModelUsuario;
use App\Models\Musica as ModelMusica;
use App\Models\Album as ModelAlbum;
use App\Superclasses\Controller;
/**
 * Description of Usuario
 *
 * @author mathe
 */
class Usuario extends Controller {
    //put your code here
    private $usuario;
    private $musica;
    private $album;
    public function __construct(\PDO $pdo) {
        parent::__construct();
        $this->usuario = new ModelUsuario($pdo);
        $this->musica = new ModelMusica($pdo);
        $this->album = new ModelAlbum($pdo);
    }
    
    public function cadastrar()
    {
        $resultado = $this->usuario->create($_POST);
        print_r($resultado);
    }
    
    public function login()
    {
        $resultado = $this->usuario->select_login($_POST["email"], $_POST["senha"]);
        
        
        if(isset($resultado[0]))
        {
            $_SESSION["userLoggedIn"] = $resultado[0];
            //print_r($_SESSION["userLoggedIn"]);
            header("Location: index.php?page=usuario&action=home");
        } else {
            header("Location: index.php?action=login");
        }        
    }
    
    public function home()
    {
        
        $fila1 = $this->album->select_todos();
        
        $fila2 = $this->album->select_genero('Rock');
        
        $fila3 = $this->album->select_artista('Megadeth');
        
        $this->view->render('header2');
        $this->view->set('fila1', $fila1);
        $this->view->set('fila2', $fila2);
        $this->view->set('fila3', $fila3);
        $this->view->render('aba_home');
        $this->view->render('footer2');
    }
    
    public function pesquisa()
    {
        $this->view->render('header2');
        $this->view->render('aba_pesquisa');
        $this->view->render('footer2');
    }
    
    public function biblioteca()
    {
        $this->view->render('header2');
        $this->view->render('aba_biblioteca');
        $this->view->render('footer2');
    }
}
