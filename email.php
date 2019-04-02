<?php


if(isset($_POST['email'])) && !empty($_POST['email']){

$nome = addslashes($_POST['name'])
$email = addslashes($_POST['email'])
$message = addslashes($_POST['message'])


$to = "admkr1@hotmail.com";
$subjet = "contato - site";
$body = "nome: ".$nome. "\r\n".
		"email: ".$email. "\r\n".
		"message: ".$message

$header = "from:caroline.oliveira2011@hotmail.com"."\r\n".Replay-To:".$email."\e\n".
	.X=Mailer:PHP/".phpversion();

if(mail($t,$subjet,$body,$header)){

	echo("Email enviado com sucesso!");

}else{
	echo("O email não pode ser enviado, tente novamente.");
}








}

?>