<?php


spl_autoload_register(fn($classe) => require "{$classe}.php");


$usuario01 = new Usuario();


$usuario01->preencherDados("Cleonildo", "(21) 99999-9999", 4);

try{
    $usuario01->cadastrar();

}catch(Exception $ex){
    echo $ex->getMessage() . "\n";
}

echo $usuario01->getTelefone() ."\n";
echo $usuario01->getDataCadastro() ."\n";
echo $usuario01->getNome();