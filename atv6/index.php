<?php

$Dia =1
switch ($Dia) {
    case '1':
      echo "Domingo";
        break;
    case '2':
     echo "Segunda";
       break;
    case '3':
     echo "Terça";
       break;
    case '4':
     echo "Quarta";
       break;
    default:
        echo "Opção Invalida";
 }
 echo "<p>Voce escolheu: $nomebebidas </p>";
 echo "Preço : " , number_format ($preco , 2, ',');
 ?> 