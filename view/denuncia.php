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

<section>
    <div class="denuncia" id="obproj">
        <div class="interface">
            <div class="flex">
                <div class="txt-ob">
                    <h1>O que é denunciável?</h1>
                    <p> A falta de acessibilidade é denunciável quando ambientes, serviços ou produtos não garantem o acesso adequado para pessoas com deficiência ou mobilidade reduzida, conforme estabelecido por lei. No Brasil, a Lei Brasileira de Inclusão (LBI) (Lei nº 13.146/2015) é uma das principais normas que garante direitos à acessibilidade. Ela exige que espaços públicos e privados, transporte, serviços de comunicação, e tecnologias estejam acessíveis a todos. A Lei nº 10.098/2000, conhecida como Lei da Acessibilidade, também regula a adaptação de espaços e serviços para eliminar barreiras arquitetônicas, urbanísticas e de comunicação. Caso essas normas não sejam cumpridas, a falta de acessibilidade pode ser denunciada a órgãos competentes, como o Ministério Público e Defensorias Públicas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="funto">
    <div class="container mt-5">
        <h2 class="text">Denúncias mais recentes</h2>
        <div class="container mt-2 bg-white p-3 rounded">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Foto da denúncia</th>
                        <th class="text-center">Nome do comércio</th>
                        <th class="text-center">Visual</th>
                        <th class="text-center">Fisica</th>
                        <th class="text-center">Auditiva</th>
                        <th class="text-center">Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    <?php funcaoTabela(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-center"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<section>
    <div class="info">
        <br><br>
        <div class="interface">
            <h1>Como funciona as denuncias</h1>
            <br>
            <div class="flex">
                <div class="img-info">
                    <img src="../componests/imagens/info-ex.png" alt="Imagem informativa">
                </div>
                <div class="txt-container">
                    <div class="txt-info">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, voluptatibus eveniet laboriosam vel dolores fugit amet recusandae! At ad dolor nesciunt sunt modi deleniti earum corporis voluptates eveniet? Nobis minus, ut veritatis quibusdam minima doloribus rerum quae tempora. Blanditiis nobis cumque, magnam provident labore expedita neque eaque obcaecati non unde quos assumenda ipsum, quidem nam eligendi repudiandae totam? Quibusdam eum officia reiciendis dolores, at recusandae quo! Molestias exercitationem eligendi voluptatibus velit praesentium voluptatum voluptate modi! Expedita, maxime eaque! Quod commodi aspernatur assumenda tenetur esse libero, veritatis excepturi, inventore illum facere amet iure ut. Repellat, cumque sit earum ut recusandae itaque.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="footer-content">
        <h3>ValeAcess</h3>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 all rights reserved.</p>
    </div>
</footer>
<?php include("blades/footer.php"); ?>