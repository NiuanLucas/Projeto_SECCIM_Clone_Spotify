<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 * Description of Playlists
 *
 * @author mathe
 */
class Playlist {
    private $pdo;
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }
    
   public function create($dados, $foto) {
        $sql = "INSERT INTO playlists(titulo, criador, descricao, foto) "; 
                
        $sql .= "VALUES(:nome, :criador, :descricao, :foto)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':criador', $dados['criador']);
        $stmt->bindValue(':descricao', $dados['descricao']);
        $stmt->bindValue(':foto', $foto);
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function update($dados) {
        $sql = "UPDATE playlists SET "; 
                
        $sql .= "titulo = :nome, descricao = :descricao ";
        $sql .= "WHERE criador = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $dados['criador']);
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':descricao', $dados['descricao']);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function delete($id)
    {
        $sql = "DELETE FROM playlists "; 
        $sql .= "WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function select_todos() {
        $sql = "SELECT * FROM playlists";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    
    public function select_user_playlist($user) {
        $sql = "SELECT * FROM playlists ";
        $sql .= "WHERE criador = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $user);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    
    public function select_id($id) {
        $sql = "SELECT * FROM playlists ";
        $sql .= "WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll()[0];
    }
    
    public function add_music($playlist, $musica) {
        $sql = "INSERT INTO musicas_playlist";
        $sql .= " VALUES(:playlist, :musica)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":playlist", $playlist);
        $stmt->bindValue(":musica", $musica);
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function remove_music($playlist, $musica) {
        $sql = "DELETE FROM musicas_playlist "; 
        $sql .= "WHERE playlist = :playlist AND musica = :musica";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":playlist", $playlist);
        $stmt->bindValue(":musica", $musica);
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function add_playlist($usuario, $playlist) {
        $sql = "INSERT INTO usuarios_playlist";
        $sql .= " VALUES(:playlist, :usuario)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":playlist", $playlist);
        $stmt->bindValue(":usuario", $usuario);
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function remove_playlist($playlist, $usuario) {
        $sql = "DELETE FROM usuarios_playlist "; 
        $sql .= "WHERE playlist = :playlist AND usuario = :usuario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":playlist", $playlist);
        $stmt->bindValue(":usuario", $usuario);
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    
    public function musicas_playlist($id)
    {
        $sql = "SELECT musica FROM musicas_playlist ";
        $sql .= "WHERE playlist = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
