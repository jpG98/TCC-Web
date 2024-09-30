<?php include("blades/top_denuncia.php"); ?>
<?php include("../controller/funcao-read-aluno-tab.php"); ?>

<header>
    <div class="navigation">
        <div class="logo">
            <a href="./index.php">ValeAcess</a>
        </div>
        <nav class="menu">
            <ul>

                <li><a class="red" href="./denuncia.php">Denúncias</a></li>
            </ul>
        </nav>
    </div>
</header>
<br><br><br><br>

<div class="container mt-5">
        <h2 class="text">Denúncias mais recentes</h2>
    <div class="container mt-2 bg-white p-3 rounded">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="text-center">Foto da denúncia</th>
                    <th class="text-center">Feedback</th>
                    <th class="text-center">Visual</th>
                    <th class="text-center">Fisica</th>
                    <th class="text-center">Auditiva</th>
                    <th class="text-center">Nome do comércio</th>
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
