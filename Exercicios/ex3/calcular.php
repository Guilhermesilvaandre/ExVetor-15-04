<?php

$escolha = $_POST['escolha'];

if ($escolha ==  1) {
    $a = array( "A força de um homem não está em sua força física, mas na sua resiliência.",
                "Seja a mudança que você quer ver no mundo.",
                "O sucesso é a soma de pequenos esforços repetidos dia após dia.");

$frase = $a[rand(0, count($a)-1)];


}else 
{
    $a = array( "Sua força interior é inabalável; você é capaz de superar qualquer obstáculo. Acredite em seu poder!",
                "A beleza da mulher está em sua resiliência",
                "Viva a sua verdade; seja autêntica, confiante e celebre sua individualidade.");

$frase = $a[rand(0, count($a)-1)];   
}

echo $frase;

?>