<?php
    /*
       Tipo string: uma sequencia de caracteres 
       entre aspas 'simples' ou "duplas"
    */ 
    
    $myFirstString = "Hello World!";
    $mySecundString = 'Hello World!';

    var_dump($myFirstString); //retorna o tipo de dado e seu valor;
    
    /* 
        Tipo inteiro: e um numero nao decimal entre
        -2.147.483.648 e 2.147.483.647.
    */
   
    $myFirstInteiro = 11;

    var_dump($myFirstInteiro); //retorna o tipo de dado e seu valor;
    
    /*
        Os inteiros podem ser especificados em: 
            - notacao decimal (base 10), 
            - hexadecimal (base 16), 
            - octal (base 8) ou 
            - binaria (base 2)
     */
    
    $mySecundInteiro = 10101010; //numero inteiro 170 em binario
    
    var_dump($myFirstInteiro); //retorna o tipo de dado e seu valor;

    /* 
        Tipo Flutuante:  e um numero com ponto decimal
        ou na forma exponencial
    */
    
    $myFirstFloat = 11.11;
    
    var_dump($myFirstFloat); //retorna o tipo de dado e seu valor;

    /*
        Tipo booleano representa dois estados possiveis:
        TRUE ou FALSE
    */

    $myFirstBooleano = TRUE;
    $mySecundBooleano = FALSE;

    /*
        Matriz: armazena varios valores em uma unica variavel
    */

    $myVeiculos = array("moto", "bicicleta", "carro"); 
   
    var_dump($myVeiculos);


?>