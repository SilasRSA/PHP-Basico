<?php
    /*
        Aqui veremos funcoes comumente usadas
        para manipular strings, dentre elas:

            - strlen() : Retorna o tamanho de uma string
            - str_word_count() : Conta o numero de palavras em uma string
            - strrev() : Inverte uma string
            - strpos() : Procura um texto dentro de uma string
            - str_replace() : Substitui texto dentro de uma string

    */

    $myStringTeste = "Essa string sera manipulada nesse codigo para fins de teste das funcoes!";

    echo strlen($myStringTeste); // Output 71

    echo str_word_count($myStringTeste); // Output 12

    echo strrev($myStringTeste); // Output !seocnuf sad etset ed snif arap ogidoc essen adalupinam ares gnirts assE

    echo strpos($myStringTeste, "codigo"); // Output 34 que e a possicao inicial da string "codigo"

    echo str_replace("sera", "foi", $myStringTeste); // Outputs Essa string foi manipulada 
                                                     // nesse codigo para fins de teste das funcoes!



?>