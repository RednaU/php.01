<?php 

include 'funcoes.php';

$nome = trataNome($_POST["nome"]);
$idade = $_POST["idade"];
$email = $_POST["email"];

if(!empty($nome) && !empty($email)){
   $arquivo = fopen("C://temp/dados.txt", "a+");
    date_default_timezone_set('America/Sao_paulo');
   fwrite($arquivo, "Dados do cliente - Cadastro realizado em ".date("d-m-Y")." as ".date("H:i"))
   fwrite($arquivo, "\r\nNome: ".$nome);
   fwrite($arquivo, "\r\nIdade: ".$idade);
   fwrite($arquivo, "\r\nEmail: ".$email);
   fwrite($arquivo, "\r\n--------------\r\n");
   fclose($arquivo);
    
    echo "Gravado com sucesso!";
           
           
           

} else{
    echo "Por favor, preencha os campos obrigatórios!";
}

 



?>


