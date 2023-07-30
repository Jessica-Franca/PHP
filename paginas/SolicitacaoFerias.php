<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\head.php'); ?>
</head>

<body>
    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\navbar.php'); ?><br>

    <div class="container">
        <form action="processar_solicitacao.php" method="POST">
            <h1>Solicitação de Férias e Décimo Terceiro</h1><br>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="Escreva seu nome completo" required><br>
            </div>

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Deseja adiantar o décimo terceiro salário?</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1"
                            checked="">
                        <label class="form-check-label" for="gridRadios1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Não
                        </label>
                    </div>
                </div>
            </fieldset><br>



            <form>
                <label for="data_inicio">Data de início das férias:</label>
                <input type="date" id="data_inicio" name="data_inicio" required><br><br>

                <label for="quantidade_dias">Quantidade de dias de férias:</label>
                <select class="form-select form-select-mb mb-3" aria-label="Large select example" id="quantidade_dias"
                    name="quantidade_dias">
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                </select>

                <label for="data_termino">Data de término das férias:</label>
                <input type="date" id="data_termino" name="data_termino" disabled><br><br>

            </form>

            <script>
                // Lista de datas de feriados (exemplo)
                const feriados = ["2023-06-01", "2023-07-10", "2023-09-07"];

                document.getElementById('data_inicio').addEventListener('change', function () {
                    calcularDataTermino();
                });

                document.getElementById('quantidade_dias').addEventListener('change', function () {
                    calcularDataTermino();
                });

                function calcularDataTermino() {
                    const dataInicio = new Date(document.getElementById('data_inicio').value);
                    const quantidadeDias = parseInt(document.getElementById('quantidade_dias').value);

                    if (!isNaN(dataInicio.getTime()) && !isNaN(quantidadeDias)) {
                        const dataTermino = new Date(dataInicio.getTime() + (quantidadeDias * 24 * 60 * 60 * 1000));
                        document.getElementById('data_termino').valueAsDate = dataTermino;
                    }
                }
            </script>

            <button type="submit" class="btn btn-primary">Enviar Solicitação</button><br><br>
            <p><a href="/index.php">Voltar para Home</a></p>
        </form>
    </div>


    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>