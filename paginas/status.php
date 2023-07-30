<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\head.php'); ?>
</head>

<body>
    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\navbar.php'); ?>

    <div class="container mt-5">
        <h1>Registro de Status do Funcionário</h1>
        <form class="form-inline">
            <div class="row">
                <div class="col-md-3">
                    <label for="matricula">Matrícula do Funcionário</label>
                    <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula" required>
                </div>
                <div class="col-md-9">
                    <label for="nome">Nome do Funcionário</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite a matricula para o nome aparecer." disabled required>
                </div>
            </div><br>

            <div class="form-group">
                <label for="status">Status do Funcionário</label>
                <select class="form-control" id="status" required>
                    <option value="">Selecione o status</option>
                    <option value="Ativo">Ativo</option>
                    <option value="Licença Médica">Licença Médica</option>
                    <option value="Férias">Férias</option>
                    <option value="Afastado">Afastado</option>
                    <option value="Desligado">Desligado</option>
                </select>
            </div><br>

            <button type="submit" class="btn btn-primary">Registrar</button><br>
        </form><br>
    </div>

    <script>
        const matriculaInput = document.getElementById('matricula');
        const nomeInput = document.getElementById('nome');

        matriculaInput.addEventListener('input', function () {
            // Simulando a obtenção do nome do funcionário com base na matrícula digitada
            const nomeDoFuncionario = obterNomeDoFuncionario(this.value);

            // Preenche o campo "Nome do Funcionário" com o valor obtido
            nomeInput.value = nomeDoFuncionario;
        });

        // Função para obter o nome do funcionário com base na matrícula (simulação)
        function obterNomeDoFuncionario(matricula) {
            // Aqui você pode realizar uma consulta ao banco de dados ou utilizar uma API para obter o nome do funcionário
            // Neste exemplo, vamos retornar um valor fixo para fins de demonstração
            const nomes = {
                '012345': 'Antonio da silva',
                '111213': 'Raquele Pereira',
                '171819': 'Vitor Santos',
            };

            return nomes[matricula] || '';
        }
    </script>
    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\footer.php'); ?>

</body>

</html>
