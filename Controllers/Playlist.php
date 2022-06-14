<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\Superclasses\Controller;
use App\Models\Playlist as ModelPlaylist;
use App\Models\Album as ModelAlbum;

use App\Models\Musica as ModelMusica;

class Playlist extends Controller {
    private $playlist_model;
    private $musica_model;
    private $album;
    public function __construct(\PDO $pdo) {
        parent::__construct();
        $this->playlist_model = new ModelPlaylist($pdo);
        $this->musica_model = new ModelMusica($pdo);
        $this->album = new ModelAlbum($pdo);
    }
    
    public function index() {
        $resultado = $this->playlist_model->select_user_playlist($_SESSION["userLoggedIn"]["id"]);
        
        $this->view->render('header2');
        $this->view->set('playlists', $resultado);
        $this->view->render('aba_biblioteca');
        $this->view->render('footer2');
    }
    
    public function musicas()
    {
        $playlist = $this->playlist_model->select_id($_GET["id"]);
        $musicas = $this->playlist_model->musicas_playlist($_GET["id"]);
        
        
        
        foreach($musicas as $key => $value){
            $musicas[$key] = $this->musica_model->select_id($value["musica"]);
        }
        
        $album = $this->album->select_id($musicas[0]['album']);
        
        $playlist['artista'] = $album['artista'];
        
        $this->view->render('header2');
        $this->view->set('folder', 'playlists');
        $this->view->set('musicas', $musicas);
        $this->view->set('album', $playlist);
        $this->view->render('album');
        $this->view->render('footer2');
    }
    
    public function atualizar() {
        $resultado = $this->playlist_model->update($_POST);
    }
    
    public function cadastrar() {
        $nome = $this->upload($_FILES["foto"]);
        $resultado = $this->playlist_model->create($_POST, $nome);
        header("Location: index.php?page=playlist");       
    }
    
    public function upload($foto)
    {
        $validas = array(".jpg", ".png");
	$extensao = strtolower(substr($foto["name"], -4));
        $newName = md5(time()).$extensao;
        
        if (empty($foto)) {
            throw new \InvalidArgumentException("O produto precisa ter uma foto");
        }elseif($extensao === $validas[0] || $extensao === $validas[1]){
            $dir = "App/Views/playlists/";
            move_uploaded_file($foto['tmp_name'], $dir.$newName);
            return $newName;
        }   
    }
    
    public function apagar() {
        $resultado = $this->playlist_model->delete($_POST);
    }
    
    public function adicionar() {
        $resultado = $this->playlist_model->add_music($_POST["list"], $_POST["musica"]);
        header("Location: index.php?page=usuario&action=home");
    }
    
    public function remover() {
        $resultado = $this->playlist_model->remove($_SESSION["usuario"]["id"], $_GET["id"]);
    }
    
    public function follow() {
        $resultado = $this->playlist_model->add_playlist($_SESSION["usuario"]["id"], $_GET["id"]);
    }
    
    public function unfollow() {
        $resultado = $this->playlist_model->remove_playlist($_SESSION["usuario"]["id"], $_GET["id"]);
    }
    
   
}
