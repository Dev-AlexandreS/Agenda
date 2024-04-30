<?php

class ModelCad
{

    public $db = null;
    public $nome = null;
    public $dataNasc = null;
    public $email = null;
    public $tel = null;
    public $senha = null;

    public function __construct($conexaoBanco)
    {
        $this->db = $conexaoBanco;
    }

    public function Cadastrar()
    {
        $retorno = ['status' => 0, 'dados' => null];

        try {

            $stmt = $this->db->prepare('INSERT INTO usuarios(nome,data_nasc,email,telefone) VALUES (:nome, :dataNasc, :email, :tel);
            INSERT INTO adm (id_usuario, senha) VALUES (LAST_INSERT_ID(), :senha)');

            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':dataNasc', $this->dataNasc);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':tel', $this->tel);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->execute();
            $retorno['status'] = 1;
        } catch (PDOException $ex) {
            echo 'Erro ao cadastrar: ' . $ex->getMessage();
        }

        return $retorno;
        
    }
}
