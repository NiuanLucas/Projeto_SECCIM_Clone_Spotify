<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 * Description of Usuario
 *
 * @author mathe
 */
class Usuario {
    private $pdo;
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function create($dados) {
        $sql = "INSERT INTO usuarios(nome, email, senha, nascimento, genero) "; 
                
        $sql .= "VALUES(:nome, :email, :senha, :nascimento, :genero)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':email', $dados['email']);
        $stmt->bindValue(':senha', sha1($dados['senha']));
        $stmt->bindValue(':nascimento', $dados['nascimento']);
        $stmt->bindValue(':genero', $dados['genero']);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function update($dados) {
        $sql = "UPDATE albuns SET "; 
                
        $sql .= "nome = :nome, email = :email, senha = :senha, nascimento = :nascimento, genero = :genero ";
        $sql .= "WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':email', $dados['email']);
        $stmt->bindValue(':senha', $dados['senha']);
        $stmt->bindValue(':nascimento', $dados['nascimento']);
        $stmt->bindValue(':genero', $dados['genero']);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function delete($id)
    {
        $sql = "DELETE FROM usuarios "; 
        $sql .= "WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        
        if($stmt->execute())
            return true;
        else
            return $stmt->errorInfo();
    }
    
    public function select_todos() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    
    public function select_login($email, $senha) {
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", sha1($senha));
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        if($stmt->execute())
            return $stmt->fetchAll();
        else
            return $stmt->errorInfo();
    }
}
