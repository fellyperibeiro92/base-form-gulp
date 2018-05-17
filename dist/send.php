<?php
if(isset($_POST['submit_orcamento'])){
  $nome=$_POST['nome'];
  $email=$_POST['email'];
  $fone=$_POST['fone'];
  $melhorData=$_POST['melhorData'];
  $melhorHora=$_POST['melhorHora'];
  $assunto=$_POST['assunto'];
  $msg=$_POST['msg'];
  if($nome==""){
    $error_orcamento="Preencha o nome, por favor.";
  }
  else if($email==""){
    $error_orcamento="Preencha o e-mail, por favor.";
  }
  else if($fone==""){
    $error_orcamento="Preencha o telefone, por favor.";
  }
  else if($melhorData==""){
    $error_orcamento="Informe o melhor dia, por favor.";
  }
  else if($melhorHora==""){
    $error_orcamento="Informe o melhor horário, por favor.";
  }
  else if($assunto==""){
    $error_orcamento="Informe o assunto, por favor.";
  }
  else if($msg==""){
    $error_orcamento="Deixe uma mensagem, por favor.";
  }
  else{
    $to = "fellype@pentaxial.com.br";
    $subject = "Página de contato";

    $message = "
    <html>
      <head>
        <title>HTML email</title>
        <style>
          p{
            font-size:16px;
          }
        </style>
      </head>
      <body>
        <p><b>Nome:</b> ".$nome."</p>
        <p><b>E-mail:</b> ".$email."</p>
        <p><b>Telefone:</b> ".$fone."</p>
        <p><b>Melhor data:</b> ".$melhorData."</p>
        <p><b>Melhor horário:</b> ".$melhorHora."</p>
        <p><b>Assunto:</b> ".$assunto."</p>
        <p><b>Mensagem:</b> ".$msg."</p>
      </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <fellype@pentaxial.com.br>' . "\r\n";

    if(mail($to,$subject,$message,$headers)){
    }
  }
}
?>