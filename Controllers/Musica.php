<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\Models\Musica as ModelMusica;
use App\Models\Album as ModelAlbum;
use App\Models\Playlist as ModelPlaylist;
use App\Superclasses\Controller;
/**
 * Description of Musica
 *
 * @author matheus
 */
class Musica extends Controller{
    
    private $musica;
    private $album;
    private $playlist;
    public function __construct(\PDO $pdo) {
        parent::__construct();
        $this->musica = new ModelMusica($pdo);
        $this->album = new ModelAlbum($pdo);
        $this->playlist = new ModelPlaylist($pdo);
    }
    
    public function tocar()
    {
        if(isset($_GET['musica']))
        {
            $musica = $this->musica->select_id($_GET["musica"]);
            $_COOKIE['musica'] = $musica;
            $playlists = $this->playlist->select_user_playlist($_SESSION["userLoggedIn"]["id"]);
            $_COOKIE['lists'] = $playlists;
            $album = $this->album->select_id($musica['album']);
            $_COOKIE['album'] = $album;
            
        }else
        {
            $musica = $_COOKIE['musica'];
            $album = $_COOKIE['album'];
            $playlists = $_COOKIE['lists'];
        }
        $this->view->set('album', $album);
        $this->view->set("musica", $musica);
        $this->view->set("playlists", $playlists);
        $this->view->render('player_musica');
    }
    
    public function album()
    {
        $resultado = $this->musica->select_album($_GET['album']);
        $album = $this->album->select_id($resultado[0]['album']);
        $this->view->render('header2');
        $this->view->set('musicas', $resultado);
        $this->view->set('album', $album);
        $this->view->set('folder', 'albuns');
        $this->view->render('album');
        $this->view->render('footer2');
    }
    
    public function pesquisar()
    {
        $musicas = $this->musica->select_titulo($_POST["titulo"]);
        //print_r($musicas);
        $this->view->render('header2');
        $this->view->set('musicas', $musicas);
        $this->view->render('aba_pesquisa');
        $this->view->render('footer2');
    }
}
