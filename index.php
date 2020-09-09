<?php

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

/*
//carrega um usuário
$user = new Usuario();
$user->loadById(4);
echo $user;
*/

/*
//carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//carrega uma lista de usuários buscando pelo login
$busca = Usuario::search("yuki");
echo json_encode($busca);
*/

//carrega um usuário usando o login e a senha
$usuario = new Usuario(); //instanciou (criou um objeto)
$usuario->login("daiyuki","dmj140891");
echo $usuario;

?>