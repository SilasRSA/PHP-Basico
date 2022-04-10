<?php
    /* Variaveis GLOBAIS nao podem ser acessados dentro das funcoes
        Da mesma forma, variaveis locais nao podem ser acessadas pelo escopo global
    */
    $varGlobal = 2;
    $varGlobal2 = 30;

    function myTeste1(){
       /* echo $varGlobal  nao pode ser executado aqui*/
       $varLocal = 4;
       
       echo $varLocal;
    }

    myTeste1();

    /* Para que uma variavel GLOVAL seja acessada dentro de uma funcao
        utilize a palavra reservada global
    */
    function myTeste3(){
        global $varGlobal2, $varGlobal; // note que usamos a palavra reservada global para podermos utilizar ela dentro da funcao
       
        $varGlobal2 = $varGlobal + $varGlobal2;
        echo $varGlobal2;
    }

    myTeste3();
    

    /* Criando variaveis locais que podem ser
        usadas posteriormente com a palavra reservada
        static
    */
    function myTest2(){
        static $x = 2;
        echo $x;
        $x++;
    }

     myTest2();
     myTest2();
     myTest2();   
?>