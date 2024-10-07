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

<section>
    <div class="denuncia" id="obproj">
        <div class="interface">
            <div class="flex">
                <div class="txt-ob">
                    <h1>O que é denunciável?</h1>
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim deserunt veritatis tempora doloribus voluptatem ab accusantium, rem est molestias cum unde molestiae alias? Ullam labore iure qui, laboriosam deleniti accusantium eos, provident omnis reiciendis dolores suscipit nobis maxime. Fuga cumque consequuntur neque ratione, molestias, nihil numquam ducimus amet labore minima, repellat perspiciatis atque tempora. Optio aperiam recusandae molestiae nam voluptatum nisi veniam earum? Repudiandae quaerat asperiores dolor vel assumenda aut consequatur
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