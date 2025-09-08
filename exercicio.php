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
            /*
            $nome = "Hermione Granger";
            $idade = 17;
            $especie = "humano";
            $altura = 1.65;
            $isAlive = true;
            $hobbies = ["ler","estudar","descrubrie coisas","sair com amigos","caminhara"];

            echo "<p>Bruxo : $nome <br>";
            echo "Idade : $idade <br>";
            echo "Especie : $especie <br>";
            if($isAlive){
                echo "Vivo : sim <br>";
            }else{
                echo "Vivo : não <br>";
            }
            echo "Altura : $altura <br></p>";
            echo "Hobbies :" .implode(",",$hobbies). "</p>";
            
            */
            $aluno = [
                'nome' => "Hermione",
                'idade'=>17,'altura'=>1.65,'especie'=>"Humano",
                'vivo'=>true,
                'hobbies'=>["ler","estudar","descrubri coisas","sair com amigos","caminhar"]
            ];


            //Saida de dados mais arrumada
            echo "<h1>Cadastro alunos</h1>";
            echo "<p>Bruxo : ". $aluno['nome'] ." <br>";
            echo "Idade :". $aluno['idade'] ."<br>";
            echo "Especie : ". $aluno['especie'] ."<br>";
            if($aluno['vivo'] ){
                echo "Vivo : sim <br>";
            }else{
                echo "Vivo : não <br>";
            }
            echo "Altura : ". $aluno['altura'] ." <br>";
            echo "Hobbies :" .implode(",",$aluno['hobbies']). "</p>";
            


        ?>
    </body>
</html>
