<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>nivel cafe</title>
    </head>
    <body>
        <?php
        $autor=[
            'nome'=>"Herry",
            'idade'=>15,
            'especie'=>"Humano",
            'vivo'=>true,
            'altura'=>1.80,
            'hobbies'=>['ler','jogar','nadar','caminhar','pescar']
        ];
        $post = [
            'titulo'=>"Boas Vindas",
            'subtitulo'=>"Uma boas vindas a todos",
            'image'=>"img/porDoSol.jpg",
            'texto'=>"  Estamos muito felizes em ter você por aqui. 🤗<br>
                        Este é um espaço feito com carinho para compartilhar novidades, dicas e conteúdos especiais. 💡✨<br>
                        Fique à vontade, interaja e acompanhe tudo o que vem por aí! 🚀💙",
            'autor'=> $autor
        ];  
        
        ?>
        <article>
            <h1><?= $post['titulo']?></h1>
            <h2><?= $post['subtitulo']?></h2>
            <img src="<?= $post['image'] ?>" alt="Imagem principal do post">

            <p><?= $post['texto']?></p>

            <section>
                <h3>Sobre o Autor</h3>
                <p><strong>Nome: </strong><?= $post['autor']['nome']?></p>
                <p><strong>Idade: </strong><?= $post['autor']['idade']?></p>
                <p><strong>Espécie: </strong><?= $post['autor']['especie']?></p>
                <p><strong>Esta vivo: </strong><?= ($post['autor']['vivo'] ? "Sim":"Não")?></p>
                <p><strong>Altura: </strong><?= $post['autor']['altura']?></p>

                <h4>Hobbies</h4>
                <ul>
                    <?php
                        $length = count($post['autor']['hobbies']);
                        for($i=0;$i<$length;$i++){
                            $hobbie = $post['autor']['hobbies'][$i];
                            echo "<li>$hobbie</li>";
                        }
                    ?>
                </ul>
            </section>
        </article>
    </body>
</html>