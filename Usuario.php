<?php

class Usuario extends Permissao{
    private  $telefone;
    private  $data_cadastro;
    private  $nome;


    public function cadastrar() 
    {
        if(empty($this->nome)):
            throw new Exception("Nome não preenchido.", 1);
            
        elseif(empty($this->telefone)):
            throw new Exception("Telefone não preenchido.", 1);

        elseif(empty(parent::getNivel())):
            throw new Exception("Nível não preenchido.", 1);

        else:
            $this->data_cadastro = date('d/m/Y h:i');

        endif;

    }


    public function preencherDados($nome, $telefone, $nivel)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        parent::setNivel($nivel);

    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    public function getNome()

    {
        return $this->nome;
    }

}