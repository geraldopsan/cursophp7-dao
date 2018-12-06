<?php 

require_once("config.php");
//CARREGA UM USUÁRIO ESPECIFICO
//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;

//testando o método select
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("ma");
//echo json_encode($search);

//Carrega um usuário, verificando usuario e senha
/*$usuario = new Usuario();
$usuario->login("geraldo","123456");
echo $usuario;*/

//Inserir um usuário
/*
$aluno = new Usuario();
$aluno->insert();
echo $aluno;
*/

//Alterar os dados
/*$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->update("teste", "teste");
echo $usuario;
*/

//Apagando um usuário
$usuario = new Usuario();

$usuario->loadbyId(4);

$usuario->delete();

echo $usuario;



?>