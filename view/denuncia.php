<?php include("blades/top_denuncia.php"); ?>
<?php include("../controller/funcao-read-aluno-tab.php"); ?>

<header>
    <div class="navigation">
        <div class="logo">
            <a href="./index.php">ValeAcess</a>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#link-ini">Sobre nós</a></li>
                <li><a href="#link-proj">Projeto</a></li>
                <li><a href="#link-app">Aplicativo</a></li>
                <li><a href="#integrantes">Integrantes</a></li>
                <li><a href="./denuncia.php">Denúncias</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container mt-5">
</div>
<div class="container mt-2 bg-white p-3 rounded">
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th class="text-center">Código</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Nome</th>
            <th class="text-center">Cidade</th>
            <th class="text-center">Curso</th>
        </tr>
    </thead>
    <tbody>
        <?php funcaoTabela();?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-center">Rodapé da Tabela</td>
        </tr>
    </tfoot>
</table>
</div>

<?php include("blades/footer.php"); ?>