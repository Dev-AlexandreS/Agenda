<?php

Class ModelTeste{

    public $db = null;
    public $nome = null;
    public $senha = null;
    
    public function __construct($conexaoBanco)
    {
        $this->db = $conexaoBanco;
    }

    public function Entrar(){

        $retorno = ['status' => 0, 'dados' => null];

        try {
            // $stmt = $this->db->prepare('SELECT * FROM usuarios WHERE nome_completo = :nome;');
            // $stmt = $this->db->prepare('SELECT * FROM usuarios WHERE nome_completo = :nome AND senha = :senha;');
            $stmt = $this->db->prepare('SELECT id_usuario, nome, senha FROM usuarios INNER JOIN adm ON usuarios.id = adm.id_usuario WHERE usuarios.nome = :nome AND adm.senha = :senha;');
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->execute();
            $dado = $stmt->fetch();

            if($dado && $dado['id_usuario'] && $dado['id_usuario'] > 0){
            
                $retorno['status'] = 1;
                $retorno['dados'] = $dado;
            
            }
            
        }
        catch(PDOException $ex)
        {
            echo 'Erro ao logar: '. $ex->getMessage();
        }
        return $retorno;
    }

    public function Listar(){
        $retorno = ["status" => 0, "dados" => null];
        try{
            $stmt = $this->db->prepare('SELECT * FROM usuarios inner join adm on usuarios.id = adm.id_usuario;');
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

