<?php
    $produtosCafeManha = [
        [
            'nome' => 'Café Cremoso',
            'descricao' => 'Café cremoso irrestivelmente suave que envolve seu paladar',
            'preco' => 'R$ 5.00',
            'img' => 'img/cafe-cremoso.jpg'
        ],
        [
            'nome' => 'Café com Leite',
            'descricao' => 'A harmonia do café e do leite, uma experiência reconfortante',
            'preco' => 'R$ 2.00',
            'img' => 'img/cafe-com-leite.jpg'
        ],
        [
            'nome' => "Cappuccino",
            'descricao' => "Café suave, leite cremoso e uma pitada de sabor adocicado",
            'preco' => "R$ 7.00",
            'img' => "img/cappuccino.jpg"
        ],
        [
            'nome' => "Café Gelado",
            'descricao' => "Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.",
            'preco' => "R$ 3.00",
            'img' => "img/cafe-gelado.jpeg"
        ]
        ];

    $produtosCafeAlmoco = [
        [
            'nome' => 'Bife',
            'descricao' => 'Bife, arroz com feijão e uma deliciosa batata frita',
            'preco' => 'R$ 27.90',
            'img' => 'img/bife.jpg'
        ],
        [
            'nome' => 'Filé de Peixe',
            'descricao' => 'Filé de peixe salmão assado, arroz, feijão verde e tomate.',
            'preco' => 'R$ 24.90',
            'img' => 'img/prato-peixe.jpg'
        ],
        [
            'nome' => "Frango",
            'descricao' => "Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante",
            'preco' => "R$ 24.00",
            'img' => "img/prato-frango.jpg"
        ],
        [
            'nome' => "Fettuccine",
            'descricao' => "Prato italiano autêntico da massa do fettuccine com peito de frango grelhado",
            'preco' => "R$ 3.00",
            'img' => "img/fettuccine.jpg"
        ]
    ] 
?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Serenatto - Cardápio</title>
</head>
<body>
    <main>
        <section class="container-banner">
            <div class="container-texto-banner">
                <img src="img/logo-serenatto.png" class="logo" alt="logo-serenatto">
            </div>
        </section>
        <h2>Cardápio Digital</h2>
        <section class="container-cafe-manha">
            <div class="container-cafe-manha-titulo">
                <h3>Opções para o Café</h3>
                <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
            <div class="container-cafe-manha-produtos">
                <?php foreach ($produtosCafeManha as $cafe):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $cafe['img'] ?>">
                        </div>
                        <p><?= $cafe['nome'] ?></p>
                        <p><?= $cafe['descricao'] ?></p>
                        <p><?= $cafe['preco'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container-almoco">
            <div class="container-almoco-titulo">
                <h3>Opções para o Almoço</h3>
                <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
            </div>
                <div class="container-almoco-produtos">
                <?php foreach ($produtosCafeAlmoco as $almoco):?>
                    <div class="container-produto">
                        <div class="container-foto">
                            <img src="<?= $almoco['img'] ?>">
                        </div>
                        <p><?= $almoco['nome'] ?></p>
                        <p><?= $almoco['descricao'] ?></p>
                        <p><?= $almoco['preco'] ?></p>
                    </div>
                <?php endforeach; ?>
                </div>
        </section>
    </main>
</body>
</html>