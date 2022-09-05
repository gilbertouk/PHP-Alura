<?php
    $idade = 16;
    $numeroDePessoas = 1;

    echo "Voce so pode entrar se tiver a partir de 18 anos ou a partir de 16 se estiver acompanhado. </br></br>";

    if($idade >= 18){
      echo "Voce tem $idade anos pode entrar. </br></br>";
    } else if($idade >= 16 && $numeroDePessoas > 1){
      echo "Voce tem $idade anos, esta acompanhado(a), entao pode entrar. </br></br>";
    } else {
      echo "Voce so tem $idade anos. Voce nao pode entrar. </br></br>";
    }
    echo "Adeus!";
?>
