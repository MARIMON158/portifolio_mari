<?php

// $dados = $_POST;
// var_dump($dados);
// var_dump($dados['nome_completo']);
// var_dump($dados['email']);
// var_dump($dados['celular']);
// var_dump($dados['msg']);
// die;

$nome = addslashes($_POST['nome_completo']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);
$mensagem = addslashes($_POST['msg']);

$para = "marigonc158@gmail.com";
$assunto = "coleta de dados";


$corpo = "Nome: ".$nome. "\n"."E-mail: ".$email."\n"."Celular: ".$celular ."\n Mensagem: ".$mensagem;

$cabeca = "From:marigonc158@gmail.com "."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso");
}else{
    echo("Houve um erro ao enviar o email");
}
    
?>