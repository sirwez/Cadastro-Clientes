<?php
session_start();
require_once 'db_connect.php';

function clear($input){
    global $connect;
 
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
     return $var;
 }

if(isset($_POST['btn-editar'])){

$id = clear($_POST['id']);
$nome = clear($_POST['name']);
$sobrenome = clear($_POST['sobrenome']);
$email = clear($_POST['email']);
$idade = clear($_POST['idade']);


$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome',
 email = '$email', idade =  '$idade' WHERE id = '$id'";

if(mysqli_query($connect, $sql)){
    $_SESSION['mensagem'] = "Atualizado com sucesso";
header('Location: ../index.php');
} else {
    $_SESSION['mensagem'] = "erro ao atualizar";
    header('Location: ../index.php');
}

}

?>