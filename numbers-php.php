<?php
    /*
        PHP fornece conversao automatica de tipos de dados.
        Caso atribuido  um inteiro a determinada variavel,
        o tipo da variavel sera imediatamente inteiro. Porem,
        casa seja atribuido um valor string a essa mesma variavel
        ela passara a ser do tipo string. Contudo, vale ressaltar que
        essa conversao automatica pode quebrar o codigo.

    */

    $myNumero = 4 * 2.5; // A soma resulta em 10, mas o numero e armazenado como float pois um dos operadores e float (2.5)

    var_dump($myNumero); // Retorna o tipo de dado e o valor armazenado em $myNumero

    /*
        Os numeros inteiros especificados em tres formatos:
            - decimal
            - hexadecimal (deve ser prefixado com 0x)
            - octal (deve ser prefixado com 0)
    */

    $myFirstInteiro = 10; // A variavel armazena o numero decimal
    
    echo $myFirstInteiro; // echo retorna o valor de $myFirstInteiro

    $myFirstInteiroHexadecimal = 0x14; // A variavel recebe o inteiro na forma hexadecimal 0x14 equivalente ao decimal 20

    echo $myFirstInteiroHexadecimal; // echo retorna o valor de $myFirstInteiroHexadecimal

    $myFirstInteiroOctal = 024; // A variavel recebe o inteiro na forma octal 024 equivalente ao decimal 20

    echo $myFirstInteiroOctal; // echo retorna o valor de $myFirstInteiroOctal

    /*
        Existem tres funcoes no PHP que verificam se o tipo
        de uma variavel e inteiro:
    
            - is_int()
            - is_integer()
            - is_long()
   
    */   
    
    echo var_dump(is_int($myFirstInteiro)); // A funcao is_int() retorna TRUE 
    echo var_dump(is_integer($myFirstInteiroHexadecimal)); // A funcao is_Integer() retorna TRUE
    echo var_dump(is_long($myFirstInteiroOctal)); // A funcao is_long() retorna TRUE

    /* 
        O PHP tem as seguintes CONSTANTES para verificar
            
            - O maior inteiro suportado: PHP_INT_MAX
            - O menor inteiro suportado: PHP_INT_MIN
            - O tamamho de um inteiro em bytes: PHP_INT_SIZE
          
    */

    echo PHP_INT_MAX; // echo retorna 9223372036854775807 que e o maior inteiro suportado
    echo PHP_INT_MIN; // echo retorna -9223372036854775808 que o menor inteiro suportado
    echo PHP_INT_SIZE; // echo retorna 8 que e o tamanho do inteiro em bytes
?>