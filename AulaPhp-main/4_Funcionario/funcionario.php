<?php
    //nome da classe
    class funcionario {
        //caracterusticas variaveis ou campos ou atributos



        //private nao pode alterar a propiedade da classe
      private  $nome;
      private  $idade;
      private  $cargo;
      private  $numDepedentes;
      private  $email;

        //metodos modificadores de acesso

        //sets e gets (tó/medá)
        //comportamentos:
        // function funcao 


        function trabalhar (){
            echo "estou trabalhando";
        }
        function demimitir(){
            $salario = 0;
            echo $this->_get("nome")." esta sendi desligado";
        }
    }
    // leitura que fazemos disso e "x" e instancia de funcionario
    $x = new Funcionario();
    $x->_set("nome", "carlos esudardo");
    $x->_set("idade",35);
    $x->_set("cargo", "prof");
    $x->_set("salario", 1500);
    $x->_set("numDepedentes", 0);
    $x->_set("email", "kaddydy@gamausk.com");


    //exemplo de execucao 
    echo "o nome do funcionario e ". $x->_get("nome") . "<br>";
    echo "o funcionario possui". $x_get("idade"). "anos. <br>";
    echo "o funcionario  ocupa o cargo de". $x->_get("cargo"). "<br>";
    echo "o  funcionario recebe o salario de ". $x->_get("salario") . "<br>";
    if ($x->_get("numDependentes")==0){
        echo "o funcionario nao possui dependentes <br>";
    } else{
        echo " o funcionario possuio". $x->_get()
    }
?>