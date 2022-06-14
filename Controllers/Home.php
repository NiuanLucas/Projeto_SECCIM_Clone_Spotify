<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\Superclasses\Controller;
use App\Models\Musica;
/**
 * Description of Home
 *
 * @author mathe
 */
class Home extends Controller {
    private $model;
    private $musica_model;
    public function __construct(\PDO $pdo) {
        parent::__construct();
        $this->musica_model = new Musica($pdo);
    }
    
    public function index() {
        //$resultado = $this->musica_model->select_todos();
        $this->view->render('header');
        $this->view->render('home');
        $this->view->render('footer');
        //print_r($resultado);
    }
    
    public function cadastro() {
        $this->view->render('header');
        $this->view->render('cadastro');
        $this->view->render('footer');
        //print_r($resultado);
    }
    
    public function login() {
        $this->view->render('header');
        $this->view->render('login');
        $this->view->render('footer');
    }
    
    public function atualizar() {
        $resultado = $this->musica_model->update($_POST);
    }
    
    public function cadastrar() {
        $resultado = $this->musica_model->create($_POST);
        print_r($resultado);
    }
    
    public function apagar() {
        $resultado = $this->musica_model->delete($_POST);
    }
    
    public function adicionar() {
        $resultado = $this->musica_model->addMusica($_SESSION["usuario"]["id"], $_GET["id"]);
    }
    
    public function remover() {
        $resultado = $this->musica_model->removeMusica($_SESSION["usuario"]["id"], $_GET["id"]);
    }
}
