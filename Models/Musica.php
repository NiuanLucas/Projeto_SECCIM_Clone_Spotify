<?php

namespace App\Models;

/**
 * Description of Musicas
 *
 * @author mathe
 */
class Musica {
    //put your code here
    private $pdo;
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function create($dados) {
        $sql = "INSERT INTO musicas(arquivo, titulo, artista, album, genero) "; 
                
        $sql .= "VALUES(:arq, :titulo, :art, :album, :genero)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':arq', $dados['musica']);
        $stmt->bindValue(':titulo', $dados['titulo']);
        $stmt->bindValue(':art', $dados['artista']);
        $stmt->bindValue(':album', $dados['album']);
        $stmt->bindValue(":genero", $dados["genero"]);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function update($dados) {
        $sql = "UPDATE musicas SET "; 
                
        $sql .= "titulo = :titulo, artista = :art, album = :album, genero = :genero ";
        $sql .= "WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $dados['id']);
        $stmt->bindValue(':titulo', $dados['titulo']);
        $stmt->bindValue(':art', $dados['artista']);
        $stmt->bindValue(':album', $dados['album']);
        $stmt->bindValue(":genero", $dados["genero"]);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function delete($id)
    {
        $sql = "DELETE FROM musicas "; 
        $sql .= "WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function select_todos() {
        $sql = "SELECT * FROM musicas";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    
    public function select_id($id) {
        $sql = "SELECT * FROM musicas WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll()[0];
    }
    
    public function select_titulo($nome) {
        $sql = "SELECT * FROM musicas WHERE titulo like :titulo";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":titulo", '%'.$nome.'%');
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    
    public function select_album($album)
    {
        $sql = "SELECT * FROM musicas WHERE album = :album";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":album", $album);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    
    public function select_genero($genero)
    {
        $sql = "SELECT * FROM musicas WHERE genero = :genero";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":genero", $genero);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
