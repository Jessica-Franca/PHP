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
    <!-- Code facilidades-->
    <?php include_once('paginas\facilidades.php'); ?>

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