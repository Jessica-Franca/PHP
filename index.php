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
    <!-- Example Code criar barra de home navegação -->
    <nav class="navbar navbar-expand-md bg-black navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1 class="d-block m-0"><img class="icon" src="./img/icone.jpg" alt="Logo"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link3</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Faça sua pesquisa" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Example Code Passar imagem automatica -->
    <?php
    $imagens = [
        "./img/home1.png",
        "./img/home2.webp",
        "./img/home3.jpeg"
    ];
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"
                class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <?php foreach ($imagens as $key => $imagem): ?>
                <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>">
                    <img src="<?php echo $imagem; ?>" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100"
                        width="800" height="400" role="img" aria-label="Placeholder: First slide"
                        preserveAspectRatio="xMidYMid slice" focusable="false" />
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Example Code cartões -->
    <h2 class="text-center pb-4">Conheça nossos locais de jogos: </h2>
    <?php
    $cartoesData = [
        ["Parque de Campismo de Nordeste", "./img/campo1.jpeg", "Algum texto de exemplo rápido para criar no título do cartão"],
        ["Parque Urbano de Ponta Delgada", "./img/campo2.jpeg", "Algum texto de exemplo rápido para criar no título do cartão"],
        ["São Miguel Island", "./img/campo3.jpeg", "Algum texto de exemplo rápido para criar no título do cartão"],
        ["Parque Florestal Pinhal Da Paz", "./img/campo4.jpeg", "Algum texto de exemplo rápido para criar no título do cartão"]
    ];
    ?>

    <div class="container row mx-auto g-4" width=200>
        <?php foreach ($cartoesData as $cartao): ?>
            <div class="col">
                <div class="card ">
                    <img src="<?php echo $cartao[1]; ?>" class="bd-placeholder-img card-img-top" width="100%" height="180"
                        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice"
                        focusable="false" />
                    <div class="card-body ">
                        <h5 class="card-title">
                            <?php echo $cartao[0]; ?>
                        </h5>
                        <p class="card-text ">
                            <?php echo $cartao[2]; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- Example Code cards com eventos-->
    <h2 class="text-center pb-4">Eventos que estão bombando: </h2>
    <?php
    $EventosData = [
        ["Aniversarios", "./img/aniversario.png", "Algum texto de exemplo rápido para criar no título do cartão", "EU 13.00"],
        ["Comfraternização de empresa", "./img/campo2.jpeg", "Algum texto de exemplo rápido para criar no título do cartão", "EU 14.00"],
        ["Dia dos namorados", "./img/campo3.jpeg", "Algum texto de exemplo rápido para criar no título do cartão", "EU 15.00"],
        ["Card title 4", "./img/campo4.jpeg", "Algum texto de exemplo rápido para criar no título do cartão", "EU 16.00"]
    ];
    ?>

    <div class="container row mx-auto g-4">
        <?php foreach ($EventosData as $evento): ?>
            <div class="col-12 col-md-6 col-xxl-4 pb-4">
                <div class="card">
                    <img src="<?php echo $evento[1]; ?>" class="bd-placeholder-img card-img-top" width="100%" height="180"
                        role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice"
                        focusable="false" />
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $evento[0]; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $evento[2]; ?>
                        </p>
                        <p>
                            <?php echo $evento[3]; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- Example Code facilidades-->
    <?php
    $FacilidadesData = [
        ["PAGUE PELO PIX", "Ganhe 5% OFF em pagamentos via PIX", "bi bi-x-diamond-fill fs-1"],
        ["CARTÃO DE CREDITO", "Parcele em até 6x sem Juros", "bi bi-credit-card-2-back-fill fs-1"],
        ["SUSTENTABILIDADE", "Diverção responsável que respeita o meio ambiente", "bi bi-globe-europe-africa fs-1"]
    ];
    ?>
    <section class="pb-4 bg-black text-bg-dark">

        <h2 class="text-center">Conheça nossas facilidades</h2>

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

    <!-- Example Code cadastro para receber notificalies-->
    <div class="container pb-4 mx-auto g-4">
        <form class="border border-secondary m-3 p-3 text-center div-novidades mx-auto">
            <h5>
                Quer receber nossas novidades e promoções exclusivas? Cadastre-se!
            </h5>

            <div class="input-group my-3">
                <input type="email" class="form-control border-secondary" placeholder="Digite seu e-mail"
                    aria-label="Digite seu e-mail" aria-describedby="button-addon2" />
                <button type="button" id="button-addon2">Enviar</button>
            </div>
        </form>
    </div>

    <!-- Example Code rodapé-->
    <footer class="text-center">
        <p class="py-3">2023 <i class="bi bi-c-circle"></i> Desenvolvido por Arba Solutions | Projeto de portifolio.</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>