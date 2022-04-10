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

    /*
        Um float e um numero com ponto decimal ou na forma exponencial.
        O PHP tem as seguintes constantes predefinidas para floats:
        
            - O maior float suportado: PHP_FLOAT_MAX
            - O menor float POSITIVO suportado: PHP_FLOAT_MIN
            - O menor float NEGATIVO suportado: -PHP_FLOAT_MAX
            - O numero de digitos decimais que podem ser arredondados
              para um float e vice-versa sem perder a precisao: PHP_FLOAT_DIG
            - O menor numero positivo representavel x, de modo que
              x + 1.0 = 1.0: PHP_FLOAT_EPSILON  

    */

    echo PHP_FLOAT_MAX; // echo retorna 1.7976931348623E+308 que o maior float representavel
    echo PHP_FLOAT_MIN; // echo retorna 2.2250738585072E-308 que o menor float POSITIVO representavel
    echo -PHP_FLOAT_MAX; // echo retorna -1.7976931348623E+308 que o menor float NEGATIVO representavel
    echo PHP_FLOAT_DIG; // echo retorna 15 que o numero maximo de digitos decimais que podem ser arredondados mantendo a precisao
    echo PHP_FLOAT_EPSILON; //echo retorna 2.2204460492503E-16
                        
                      

?>