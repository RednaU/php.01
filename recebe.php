<?php 

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];

if(!empty($nome) && !empty($email)){
echo "Nome: ".$nome."<br>";
echo "Idade: ".$idade."<br>";
echo "E-mail: ".$email."<br>";
} else{
    echo "Por favor, preencha os campos obrigatórios!";
}

?>


