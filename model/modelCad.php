<?php

class ModelCad
{

    public $db = null;
    public $nome = null;
    public $dataNasc = null;
    public $email = null;
    public $tel = null;
    public $senha = null;
    public $id = null;

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

    public function ListarPeloId(){
        $retorno = ["status" => 0, "dados" => null];
        try{
            $stmt = $this->db->pdo->prepare('SELECT * FROM usuarios inner join adm on usuarios.id = adm.id_usuario;');
            $stmt->execute();
            $dado = $stmt->fetchAll();
            $retorno["status"] = 1;
            $retorno["dados"] = $dado;
        }
        catch(PDOException $ex){
            echo 'Erro ao consultar '. $ex->getMessage();
        }

        return $retorno;

     }
}
