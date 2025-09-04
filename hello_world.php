<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Introdução a PHP</title>
    </head>
    <body>
        <?php
            /*
            Comando para saiada de dados 
            echo "<h1> Titulo </h1>";
            print "texto";
            */

            //Estrutua de dados - ENTRADA  
            //Dados -> Informações -> Conhecimentos -> Inteligêcia

            //$nome_da_variavel = valor_da_variavel
            $nome = "André";//String
            $idade = 29;//Integer ou int
            $altura =1.78;//Float
            $isAlive = true;//Boolean
            
            //lista(array indexado)
            $hobbies = ["Caminha","filmes","Video Games"];
            //lista(Array associativo)
            $pessoa=[
                "nome"=>"Andre",
                "idade"=>29,
                "altura"=>1.78,
                "vivo"=>true,
                "hobbies"=>["Caminha","filmes","Video Games"]
            ];
            
            echo "<p>Nome : $nome <br>";
            echo "Idade : $idade <br>";
            echo "Altura : $altura <br>";
            echo "Esta vivo : $isAlive <br>";
            echo "Hobbies :".$hobbies[0] . "<br></p>";

            echo "<p> Array Associativo :";
            echo " ".$pessoa['nome'] .",";
            echo " ".$pessoa['idade'] .",";
            echo " ".$pessoa['altura'] .",";
            echo " ".$pessoa['vivo'] .",";
            echo " ".$pessoa['hobbies'][0] ."</p>";




        ?>

      

    </body>
</html>