<?php
require __DIR__."/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    "Olá Mundo!! Esse é o meu primeiro email",
    "<h1>Estou apenas testando!</h1>Espero que tenha dado certo!",
    "Ronaldo Alves Pereira Filho",
    "ronaldo.alves.1997@gmail.com"
)->send();

if(!$email->error()){
    var_dump(true);
}

else echo $email->error()->getMessage();