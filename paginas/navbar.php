<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include_once('head.php'); ?>
</head>

<body>
    <!-- Example Code criar barra de home navegação -->
    <nav class="navbar navbar-expand-md bg-black navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1 class="d-block m-0"><img class="icon" src="./imagens/undraw_People_re_8spw.png" alt="Logo"></h1>
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
                        <a class="nav-link" href="/paginas/SolicitacaoFerias.php">Férias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hierarquia</a>
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

</body>

</html>