<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascara Site</title>
    <link rel="shortcut icon" href="./img/icone.jpg" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>

<body>

    <!-- Example Code facilidades-->

    <?php
    $FacilidadesData = [
        ["NOSSA EQUIPE", "Conheça nossos desenvolvedores", "bi bi-people-fill fs-1"],
        ["NOSSA LINGUAGEM", "Saiba quais linguagens de programação utilizamos nesse projeto", "bi bi-regex fs-1"],
        ["GITHUB", "Analise de perto nosso código", "bi bi-github fs-1"]
    ];
    ?>
    <section class="pb-4 bg-black text-bg-dark">

        <h2 class="text-center">Conheça também:</h2>

        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-3 px-3">
            <?php foreach ($FacilidadesData as $facilidades): ?>

                <div class="div-facilidades d-flex align-items-center">
                    <div><i class="<?php echo $facilidades[2]; ?>"></i></div>
                    <div>
                        <div class="ms-3 mb-1">
                            <?php echo $facilidades[0]; ?>
                        </div>
                        <div class="texto-menor ms-3">
                            <?php echo $facilidades[1]; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>