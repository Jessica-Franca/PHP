<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include_once('./paginasindex/head.php'); ?>
</head>

<body>
    <?php include_once('./paginasindex/navbar.php'); ?>




    <!-- Example Code Passar imagem automatica -->
    <?php
    $imagens = [
        "./imagens\undraw_Contact_us_re_4qqt.png",
        "./imagens\undraw_Investor_update_re_qnuu.png",
        "./imagens\undraw_People_re_8spw.png"
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
    <h2 class="text-center pb-4">Conheça nossos serviços: </h2>
    <?php
    $cartoesData = [
        ["Gerenciamento de equipe", "./imagens/undraw_Data_re_80ws.png", "Status, Hierarquia"],
        ["Gerenciamento de ferias", "./imagens/undraw_People_re_8spw.png", "Saiba as verias que estão vencendo"],
        ["Analise de dados", "./imagens/undraw_Team_page_re_cffb.png", "Saiba a quantidade de colaboradores ativos, e inativos, faça suas analises"]
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

    <?php include_once('./paginasindex/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>