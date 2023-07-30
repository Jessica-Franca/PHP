<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\head.php'); ?>
</head>

<body>
    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\navbar.php'); ?>

    <div class="container mt-5">
        <h1>Registrar Hierarquia</h1>
        <form class="form-inline">
            
            <div class="row">
                <div class="col-md-3">
                    <label for="matricula">Matrícula</label>
                    <input type="text" class="form-control" id="matricula" placeholder="Digite a matrícula" required>
                </div>
                <div class="col-md-9">
                    <label for="nome">Nome Funcionario</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite a matricula para o nome aparecer." disabled required>
                </div>
            </div><br>

            <div class="form-group">
                <label for="cargo">Cargo</label>
                <select class="form-control" id="cargo" required>
                    <option value="">Selecione o cargo</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Coordenador">Coordenador</option>
                    <option value="Analista">Analista</option>
                </select>
            </div><br>

            <div class="row">
                <div class="col-md-3">
                    <label for="matricula_superior">Matrícula Superior Imediato</label>
                    <input type="text" class="form-control" id="matricula_superior" placeholder="Digite a matrícula" required>
                </div>
                <div class="col-md-9">
                    <label for="nome_superior">Nome Superior Imediato</label>
                    <input type="text" class="form-control" id="nome_superior" placeholder="Digite a matricula para o nome aparecer." disabled required>
                </div>
            </div><br>

            <div class="form-group">
                <label for="setor">Setor</label>
                <select class="form-control" id="setor" required>
                    <option value="">Selecione o setor</option>
                    <option value="RH">Recursos Humanos</option>
                    <option value="Financeiro">Financeiro</option>
                    <option value="Vendas">Vendas</option>
                    <option value="Tecnologia">Tecnologia</option>
                </select>
            </div><br>

            <button type="submit" class="btn btn-primary">Registrar</button><br>
        </form><br>
    </div>

    <script>
        const matriculaInput = document.getElementById('matricula');
        const nomeInput = document.getElementById('nome');
        const matriculaSuperiorInput = document.getElementById('matricula_superior');
        const nomeSuperiorInput = document.getElementById('nome_superior');

        matriculaInput.addEventListener('input', function () {
            // Simulando a obtenção do nome da pessoa com base na matrícula digitada
            const nomeDaPessoa = obterNomeDaPessoa(this.value);

            // Preenche o campo "Nome da Pessoa" com o valor obtido
            nomeInput.value = nomeDaPessoa;
        });

        matriculaSuperiorInput.addEventListener('input', function () {
            // Simulando a obtenção do nome da pessoa com base na matrícula digitada
            const nomeSuperior = obterNomeSuperior(this.value);

            // Preenche o campo "Nome da Pessoa" com o valor obtido
            nomeSuperiorInput.value = nomeSuperior;
        });

        // Função para obter o nome da pessoa com base na matrícula (simulação)
        function obterNomeDaPessoa(matricula) {
            // Aqui você pode realizar uma consulta ao banco de dados ou utilizar uma API para obter o nome da pessoa
            // Neste exemplo, vamos retornar um valor fixo para fins de demonstração
            const nomes = {
                '012345': 'Antonio da silva',
                '111213': 'Raquele Pereira',
                '171819': 'Vitor Santos',
            };

            return nomes[matricula] || '';
        }

        // Função para obter o nome da pessoa com base na matrícula (simulação)
        function obterNomeSuperior(matricula_superior) {
            // Aqui você pode realizar uma consulta ao banco de dados ou utilizar uma API para obter o nome da pessoa
            // Neste exemplo, vamos retornar um valor fixo para fins de demonstração
            const nomes_superior = {
                '678910': 'Maria da Silva',
                '141516': 'João Pereira',
                '202122': 'Ana Santos',
            };

            return nomes_superior[matricula_superior] || '';
        }
    </script>
    <?php include_once('C:\Users\Jéssica\Documents\Work Pessoal\PHP_SistemaRH\paginasIndex\footer.php'); ?>

</body>

</html>