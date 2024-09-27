<?php include("blades/top_denuncia.php"); ?>
<?php include("../controller/funcao-read-aluno-tab.php"); ?>

<header>
    <div class="navigation">
        <div class="logo">
            <a href="./index.php">ValeAcess</a>
        </div>
        <nav class="menu">
            <ul>
<<<<<<< HEAD
                <li><a class="red" href="./denuncia.php">Denúncias</a></li>
=======
                <li><a href="#link-ini">Sobre nós</a></li>
                <li><a href="#link-proj">Projeto</a></li>
                <li><a href="#link-app">Aplicativo</a></li>
                <li><a href="#integrantes">Integrantes</a></li>
                <li><a href="./denuncia.php">Denúncias</a></li>
>>>>>>> 311689079224721d35de2cd46ac48e6f1f4e4bc5
            </ul>
        </nav>
    </div>
</header>
<<<<<<< HEAD

<br><br><br><br>
=======
>>>>>>> 311689079224721d35de2cd46ac48e6f1f4e4bc5

<div class="container mt-5">
<h2 class="text">As denuncias mais recentes</h2>
<div class="container mt-2 bg-white p-3 rounded">
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th class="text-center">Visual</th>
            <th class="text-center">Fisica</th>
            <th class="text-center">Auditiva</th>
            <th class="text-center">Foto do restaurande</th>
            <th class="text-center">Feedback</th>
        </tr>
    </thead>
    <tbody>
        <?php funcaoTabela();?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-center"></td>
        </tr>
    </tfoot>
</table>
</div>
</div>
<?php include("blades/footer.php"); ?>