<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 * Description of Albuns
 *
 * @author mathe
 */
class Album {
    private $pdo;
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function create($dados) {
        $sql = "INSERT INTO albuns(titulo, lancamento, artista) "; 
                
        $sql .= "VALUES(:titulo, :lancamento, :artista)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':titulo', $dados['titulo']);
        $stmt->bindValue(':lancamento', $dados['lancamento']);
        $stmt->bindValue(':artista', $dados['artista']);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function update($dados) {
        $sql = "UPDATE albuns SET "; 
                
        $sql .= "titulo = :titulo, lancamento = :lancamento, artista = :artista ";
        $sql .= "WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':titulo', $dados['titulo']);
        $stmt->bindValue(':lancamento', $dados['lancamento']);
        $stmt->bindValue(':artista', $dados['artista']);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function delete($id)
    {
        $sql = "DELETE FROM albuns "; 
        $sql .= "WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function select_todos() {
        $sql = "SELECT * FROM albuns";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    
    public function select_id($id)
    {
        $sql = "SELECT * FROM albuns WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll()[0];
    }
    
    public function select_genero($genero)
    {
        $sql = "SELECT * FROM albuns WHERE genero = :genero";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":genero", $genero);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    
    public function select_artista($artista)
    {
        $sql = "SELECT * FROM albuns WHERE artista = :artista";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":artista", $artista);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
