<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "test";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;   

$id = $_POST['id'];
$task = $_POST['task'];
$done_date = $_POST['done'];
$insert_date = $_POST['insert'];
$delete_date = $_POST['delete'];
$query = "INSERT INTO tarefas (id, task, done_date, insert_date, delete_date,) VALUES ('".$id."', '".$task."', '".$done_date."'.'".$insert_date."'.'".$delete_date."')";

$con = $mysqli->query($inserir) or die($mysqli->error);

?>
