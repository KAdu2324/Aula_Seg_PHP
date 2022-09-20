<?php
    $a = null; // e o mesmo que $a
    $b = "";
    $c = null;

   // echo "<pre>";
    //echo "VARDUMP da varialvel a: ".var_dump($a);
    //echo "VARDUMP da varialvel b: ".var_dump($b);
    //echo "VARDUMP da varialvel c: ".var_dump($c);
    //echo"<pre>";

    if(is_null($a)){
        echo "sim a variavel e nula";
    }else{
        echo"nao o valor nao e nulo";
    }

    echo "<hr>";


    if(is_null($b)){
        echo "sim b variavel e nula";
    }else{
        echo"nao o valor  b nao e nulo";
    }

    echo "<hr>";


    if(is_null($c)){
        echo "sim c variavel e nula";
    }else{
        echo"nao o  valor  cnao e nulo";
    }
    


?>