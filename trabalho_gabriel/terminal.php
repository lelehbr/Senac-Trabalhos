<?php // index.php

require_once("./databases/MariaDb.php");
require_once("./models/tarefa.php");

$mariaDb = new MariaDb();
$conexao = $mariaDb->dbConnection();

$tarefa = new tarefa($conexao);
$tarefa->nome = "estudar";
$tarefa->descricao = "estudar para a prova de quimica";
$tarefa->id_usuario = "1";
$tarefa->create();


// $tarefa = new tarefa($conexao);
// $tarefa->nome = "Gabriel";
// $tarefa->login = "gabriel@teste.com.br";
// $tarefa->id_usuario = "123";
// $tarefa->create();

// $tarefa2 = new tarefa($conexao);
// $tarefa2->nome = "Maria";
// $tarefa2->login = "maria@teste.com.br";
// $tarefa2->id_usuario = "123456";
// $tarefa2->create();

// $tarefa = new tarefa($conexao);
// $tarefa->id = 1;
// $tarefa->remove();

// $tarefa = new tarefa($conexao);
// $tarefa->id = 2;
// $tarefa->nome = "Maria Clementina";
// $tarefa->login = "maria@asdrubal.org";
// $tarefa->id_usuario = "789456";
// $tarefa->update();

// $lista_de_tarefas = $tarefa->getAll();

// foreach($lista_de_tarefas as $item){
//     echo "nome: {$item['nome']}";
//     echo PHP_EOL;
// }
// $tarefa = new tarefa($conexao);
// $tarefa->getUserById(10);

// if($tarefa->id > 0){
//     echo "=tarefa: {$tarefa->nome} encontrado";
// }else{
//     echo "=tarefa não encontrada";
// }

echo PHP_EOL;