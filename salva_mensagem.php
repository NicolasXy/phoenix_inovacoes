<?php
	include_once('conexao.php');
	$nome = $_POST['nameTextArea'];
	$email = $_POST['emailTextArea'];
	$assunto = $_POST['subjectTextArea'];
	$mensagem = $_POST['messageTextArea'];
	
	$result_msg_contato = "INSERT INTO mensagens_contatos(nameTextArea, emailTextArea, subjectTextArea, messageTextArea, created) VALUES ('$nome', '$email', '$assunto', '$mensagem', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
?>