<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pedido</title>
    </head>
    <body>
        <?php
            //Exercicio
            $nome = "Hermione Granger";
            $idade = 17;
            $especie = "humano";
            $altura = 1.65;
            $isAlive = true;
            $hobbies = ["ler","estudar",""]

            $alunos = ['nome' => "Hermione",'idade'=>17,'altura'=>1.65,'vivo'=>true,'hobbies'=>["ler","estudar",""]];

            echo "<p>Bruxo : $nome <br>";
            echo "Idade : $idade <br>";
            echo "Especie : ".$especie . "<br>";
            if($isAlive){
                echo "Vivo : sim <br>";
            }else{
                echo "Vivo : não <br>";
            }
            echo "Altura : $altura <br>"
            echo "Hobbies : $hobbies </p>"
            


        ?>
    </body>
</html>