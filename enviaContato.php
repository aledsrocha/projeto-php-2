<?php 

if (isset($POST['email']) && !empty($POST['email'])) {
  
  $nome = addslashes($POST['nome']);
$email = addslashes($POST['email']);
$assunto = addslashes($POST['assunto']);
$msg = addslashes($POST['msg']);


$to = "aledsrocha@gmail.com"; #para o email que vai receber
$subject = "contato - programador br"; #para saber que o email veio do form
$body = "Nome: " .$nome. "\n".
        "Email: " .$email. "\n".
        "Assunto: " .$assunto. "\n".
        "msg: " .$msg;

$header = "From:escrermili@hotmail.com". "\n". "Reply-to:".$email."\n". "X=Mailer:PHP/".phpversion(); # para reenviar o email para quem enviou

if ($mail($to, $subject, $body, $header)) {
    echo "Enviado com Sucesso";
}

else{
    echo "Erro ao Enviar!";
}
}





 ?>