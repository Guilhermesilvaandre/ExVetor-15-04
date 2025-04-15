<?php

$escolha = $_POST['escolha'];

$frase = array("Dá-lhe alegria, alegria no coração. Daria a vida inteira para ser campeão, a taça Libertadores, obsessão, tem que jogar com a alma e o coração.",
            "A Fiel nunca abandona! Juntos somos mais fortes, e a vitória é sempre uma questão de tempo!",
            "O Tricolor é sinônimo de garra e determinação. Cada jogo é uma nova chance de mostrar a força do nosso time!",
            "O Peixe é a essência do futebol arte! Vamos juntos, sempre em busca de mais conquistas e alegrias!");

echo $frase[$escolha];

?>