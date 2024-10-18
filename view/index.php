<?php include("blades/top.php"); ?>

<header>
    <div class="navigation">
        <div class="logo">
            <a href="./index.php">ValeAcess</a>
        </div>
        <nav class="menu">
            <ul>
                <li><a class="red" href="./denuncia.php">Denúncias</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Acessibilidade</a>
                    <div class="dropdown-content">
                        <a href="#info">O que é ?</a>
                        <a href="#materias">Materias</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Nosso projeto</a>
                    <div class="dropdown-content">
                        <a href="#sobrenos">Sobre nós</a>
                        <a href="#obproj">Projeto</a>
                        <a href="#app">Aplicativo</a>
                        <a href="#integrantes">Integrantes</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="banner">
    <div class="banner-content">
        <h1>ValeAcess</h1>
        <p>Para um vale mais acessível</p>
    </div>
</div>

<main>

    <section>
        <div class="link-info" id="info"></div>
        <div class="info">
            <div class="interface">
                <h1>Mas o que é acessibilidade?</h1>
                <div class="flex">
                    <div class="img-info">
                        <img src="../componests/imagens/info-ex.png" alt="Imagem informativa">
                    </div>
                    <div class="txt-container">
                        <div class="txt-info">
                            <p>
                                A acessibilidade é a prática de garantir que ambientes, produtos, serviços e informações sejam acessíveis a todas as pessoas, independentemente de suas condições físicas, sensoriais, cognitivas ou intelectuais. O objetivo é eliminar barreiras e permitir que todos, incluindo pessoas com deficiência ou mobilidade reduzida, possam participar plenamente e de forma autônoma na sociedade.
                            </p>
                        </div>
                    </div>
                    <div class="txt-info1">
                        <p>
                            De acordo com uma pesquisa do Procon São Paulo, 92% dos entrevistados já testemunharam situações em que pessoas com deficiência enfrentaram dificuldades de acessibilidade, o que demonstra que o problema é amplamente percebido. Esse dado evidencia que a participação popular é fundamental para melhorar a fiscalização e garantir que os direitos sejam cumpridos. Quando há um movimento de denúncia por parte da população, torna-se muito mais difícil para autoridades e instituições ignorarem as violações de acessibilidade.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="link-materias" id="materias"></div>
        <div class="materias">
            <div class="interface">
                <h2>Matérias <br> de acessibilidade</h2>
                <div class="flex2">
                    <!-- materias 1 -->
                    <div class="materias-box">
                        <div class="materias">
                            <div class="materias-conteudo">
                                <div class="materias-info">
                                    <h3>Acessibilidade <br> atitudinal</h3>
                                    <p>Diz respeito ao comportamento das pessoas sem preconceitos, estereótipos, estigmas e discriminações. Por exemplo: usar o termo “pessoa com deficiência”, e não “deficiente”; ao falar com uma pessoa com deficiência, dirigir-se diretamente a ela, e não ao seu acompanhante; não tratar a pessoa com deficiência como “coitadinho”.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- materias 2 -->
                    <div class="materias-box">
                        <div class="materias">
                            <div class="materias-conteudo">
                                <div class="materias-info">
                                    <h3>Acessibilidade arquitetônica</h3>
                                    <p>É promover a adequação de espaços e a extinção de barreiras físicas e ambientais dentro de residências, espaços públicos e privados, edificações e equipamentos urbanos. Exemplos: rampas, elevadores e banheiros adaptados, calçadas com piso tátil, etc.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- materias 3 -->
                    <div class="materias-box">
                        <div class="materias">
                            <div class="materias-conteudo">
                                <div class="materias-info">
                                    <h3>Acessibilidade nas comunicações</h3>
                                    <p>Diz respeito ao acesso à comunicação interpessoal (como língua de sinais), comunicação escrita em livros, apostilas, jornais, revistas e comunicação virtual. Exemplo: a presença de intérprete de Libras e a audiodescrição de imagens, sejam elas fotografias, filmes, peças de teatro ou eventos em geral.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <br><br>
    <section class="sobrenos">
        <div class="link-sobrenos" id="sobrenos"></div>
        <br>
        <div class="interface">
            <div class="flex">
                <div class="txt-sobrenos">
                    <h1>Sobre nós</h1>
                    <p>
                    O ValeAcess tem como objetivo disseminar informação sobre acessibilidade no Vale do Ribeira e dar meios para que as pessoas possam moldar o ambiente ao seu redor. Através de um aplicativo móvel, os usuários podem fazer avaliações sobre os comércios e prédios públicos que visitam, e, em caso de infração, denunciar esse local.
                    </p>
                </div>
                <div class="img-sobrenos">
                    <img src="../componests/imagens/img-da-logo.png" alt="Logo do projeto">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="link-obproj" id="obproj"></div>
        <div class="obprojeto" id="obproj">
            <div class="interface">
                <div class="flex">
                    <div class="txt-ob">
                        <h1>Objetivo do Projeto</h1>
                        <p> O objetivo do projeto é desenvolver um sistema, utilizando um aplicativo móvel, uma interface de computador e um site que auxiliem no processo de denunciar a falta de acessibilidade e corrigi-la. Assim, o usuário denunciará os locais que frequentar e que não seguirem as leis de arquitetura regentes no Brasil, e, desse modo, esses mesmos locais poderão avaliar suas falhas para corrigi-las.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="faixa">
        <div id="proj"></div>
    </div>
    <div class="fundo2">
        <section>
            <div class="projeto">
                <div class="interface">
                    <div class="flex">
                        <div class="img-cel">
                            <img src="../componests/imagens/cel.png" alt="Imagem de celular">
                        </div>
                        <div class="txt-projeto">
                            <h1>Projeto</h1>
                            <p>
                                O ValeAcess nasceu da vontade de fomentar o cumprimento e fiscalização das leis de acessibilidade e do desejo de trazer para a nossa região o pioneirismo na maneira de promover a inclusão. Acreditamos que, ao criar para o usuário o ambiente de ajuda ao próximo, ele fará e se sentirá parte desse importante projeto; e as empresas serão motivados pelo marketing "boca-a-boca" que seus clientes geram.
                            </p>
                            <p>
                                Acreditamos que, com essa iniciativa, as pessoas com deficiência da região se sentirão mais acolhidas. O Vale já tem uma grande história no acolhimento de pessoas surdas, e desejamos expandir essa experiência para as pessoas com deficiência, além de auditiva, motora e visual parcial.
                            </p>
                        </div>
                        <div class="img-cel">
                            <img src="../componests/imagens/cel.png" alt="Imagem de celular">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    <div id="app"></div>
    <div class="faixa2"></div>
    <section>
        <div class="app">
            <div class="interface">
                <div class="flex">
                    <div class="separo">
                        <div class="txt-app">
                            <h1>App</h1>
                            <p>
                                Nosso aplicativo móvel está disponível para download no QR Code ao lado!<br>
                                Ele serve para você, usuário, se cadastrar e poder avaliar os comércios. Para você que é pessoa com deficiência, suas avaliações ficarão em destaque!
                            </p>
                            <p>
                                Para utilizá-lo, basta, como falamos aí em cima, baixar, se cadastrar, e pronto ;)!<br>
                                Explore o melhor do Vale entre as categorias 'Alimentício', 'Comércio', 'Prédios Públicos' e 'Perto de mim', podendo filtrar os locais de acordo com a melhor avaliação na categoria da deficiência escolhida.
                            </p>
                        </div>
                    </div>
                    <div class="img_app">
                        <img src="../componests/imagens/img_app.png" alt="QR Code para baixar o app">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Integrantes" id="integrantes">
            <div class="interface">
                <h2>Integrantes</h2>
                <div class="flex1">
                    <!-- Integrante 1 -->
                    <div class="integrantes-box">
                        <div class="integrante">
                            <div class="integrante-conteudo">
                                <div class="integrante-info">
                                    <p>Designer<br>Dev Desktop</p>
                                </div>
                                <h3>Amauri</h3>
                                <div class="integrantes-rede-social">
                                    <div id="footer_social_media">
                                        <a href="https://www.instagram.com/imcjuninhojp/" class="footer-link" id="instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://github.com/juninhods" class="footer-link" id="github">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Integrante 2 -->
                    <div class="integrantes-box">
                        <div class="integrante">
                            <div class="integrante-conteudo">
                                <div class="integrante-info">
                                    <p>Designer<br>Dev Web</p>
                                </div>
                                <h3>João Gustavo</h3>
                                <div class="integrantes-rede-social">
                                    <div id="footer_social_media">
                                        <a href="https://www.instagram.com/jp_relaxa/" class="footer-link" id="instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://github.com/jpG98" class="footer-link" id="github">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Integrante 3 -->
                    <div class="integrantes-box">
                        <div class="integrante">
                            <div class="integrante-conteudo">
                                <div class="integrante-info">
                                    <p>Designer<br>Dev Mobile<br>Redatora</p>
                                </div>
                                <h3>Ana Jullia</h3>
                                <div class="integrantes-rede-social">
                                    <div id="footer_social_media">
                                        <a href="https://www.instagram.com/aninhapoggers/" class="footer-link" id="instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://github.com/anajullia" class="footer-link" id="github">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <div class="footer-content">
            <h3>ValeAcess</h3>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 all rights reserved.</p>
        </div>
    </footer>

</main>

<?php include("blades/footer.php"); ?>