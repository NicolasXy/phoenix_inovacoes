<?php
session_start();
require_once 'conexao.php';

function clear ($input){
    global $conn;

    $var = mysqli_escape_string($conn, $input);

    $var = htmlspecialchars($var);
    return $var;
}


if(isset($_POST['btn-enviar'])):
    $nome = ($_POST['nome']);
    $email = ($_POST['email']);
    $assunto = ($_POST['assunto']);
    $mensagem = ($_POST['mensagem']);

    $sql = "INSERT INTO tbl_contact (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$email')";

    if(mysqli_query($conn, $sql)):
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso";
        header('Location: contact.php');
    else:
        $_SESSION['mensagem'] = "Erro ao fazer seu cadastro";
        header('Location: contact.php');
    endif;
endif;

?>