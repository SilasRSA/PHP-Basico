<?php
    /*
       echo e printsao mais ou menos iguais. Ambos sao usados 
​​     para enviar dados para a tela. As diferencas sao pequenas: 
       echo nao tem valor de retorno enquanto print tem valor de 
       retorno 1 para que possa ser usado em expressoes
    */
    
    $x = 2.2;
    $y = 5;
   
    echo $x;
    echo "<h1>Hello World</h1>"; //echo pode conter HTML
    echo "Hello", "World"; //echo tambem pode ser usado assim
    echo $x + $y;
    echo "x = " .$x.;

    
    print $x;
    print "<h1>Hello World</h1>"; //print pode contem HTML
    print "Hello", "World"; //print tambem pode ser usado assim
    print $x + $y;
    print "x = " .$x.;
?>
