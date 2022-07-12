<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta property="og:url" content="https://solius.com.br" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Solius Energia Solar - Especialista em Usina Solar Fotovoltaica" />
        <meta property="og:description" content="Energia Solar com equipamentos fotovoltaicos de qualidade e garantia de 10 anos é com a Solius. Converse com um especialista" />
        <meta property="og:image" content="https://solius.com.br" />
        <meta property="og:site_name" content="Solius Energia Solar Fotovoltaica" />
        <meta property="fb:admins" content="solius.solar" />
        <meta name="description" content="Energia Solar com equipamentos fotovoltaicos de qualidade e garantia de 10 anos é com a Solius. Converse com um especialista" />
        <meta name="abstract" content="Usina de Energia Solar Fotovoltaica é com a Solius" />
        <meta name="keywords" content="sistema fotovoltaico, energia solar, usina solar, placa solar, painel solar, empresa energia solar, placa fotovoltaica, kit solar residencial, energia solar foz do iguaçu, energia solar medianeira, energia solar dourados" />
        <meta name="robot" content="all" />
        <meta name="rating" content="general" />
        <meta name="distribution" content="global" />
        <title><?php echo $voResultadoConfiguracoes->titulo ?> - Sobre</title>
        <style type="text/css">.preloader{background:#118442;height:100%;left:0;position:fixed;top:0;width:100%;z-index:9999999}.preloader.thm-gradient-two{background:#4c1da2;background:-webkit-gradient(left top,right top,color-stop(0,#4c1da2),color-stop(100%,#bc5f9d));background:-webkit-gradient(linear,left top,right top,from(#4c1da2),to(#bc5f9d));background:linear-gradient(to right,#4c1da2 0,#bc5f9d 100%)}.preloader.yellow-bg{background:#ffb907;background:-webkit-gradient(left top,right top,color-stop(0,#ffb907),color-stop(100%,#ffd84f));background:-webkit-gradient(linear,left top,right top,from(#ffb907),to(#ffd84f));background:linear-gradient(to right,#ffb907 0,#ffd84f 100%)}.preloader .spinner{width:60px;height:60px;position:absolute;top:50%;left:50%;margin-top:-30px;margin-left:-30px;background-color:#fff;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}</style>

        <?php
        include 'php/head.php';
        ?>
    </head>

    <body>
        <div class="preloader"><div class="spinner"></div></div>
        <div class="page-wrapper">
            <header>
                <?php
                include 'php/menu.php';
                ?>
            </header>    

            <div class="op-header gray-background">
                <div class="section-header text-center mt-30">
                    <h1 class="f1 fw-7 cw">A Solius</h1>
                </div>
            </div>
            <div class="page-content">
                <div class="about-page">
                    <div class="process gray-background">
                        <div class="container">
                            <div class="row pos-r">
                                <div class="col-lg-7 pr-0">
                                    <div class="process-txt">
                                        <?php
                                        $vsSqlQuemSomos = "SELECT texto, imagem FROM `sobre`";
                                        $vrsExecutaQuemSomos = mysqli_query($Conexao, $vsSqlQuemSomos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                        while ($voResultadoQuemSomos = mysqli_fetch_object($vrsExecutaQuemSomos)) {
                                            ?>
                                            <div class="section-header">
                                                <h1 class="f1 fw-7 c4">Bem vindo a Solius</h1>
                                            </div>
                                            <?php echo $voResultadoQuemSomos->texto ?>
                                            <div class="process-img">
                                                <img src="<?php echo URL ?>wdadmin/uploads/sobre/<?php echo $voResultadoQuemSomos->imagem ?>" class="border-10" alt="Bem Vindo a Solius" title="Bem Vindo a Solius">
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro1 pb-100 gray-background">
                        <div class="container">
                            <div class="row">
                                <?php
                                $vsSqlMissaoVisaoValores = "SELECT texto_missao, texto_visao, texto_valores FROM `missao_visao_valores`";
                                $vrsExecutaMissaoVisaoValores = mysqli_query($Conexao, $vsSqlMissaoVisaoValores) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                while ($voResultadoMissaoVisaoValores = mysqli_fetch_object($vrsExecutaMissaoVisaoValores)) {
                                    ?>
                                    <div class="col-md-4 col-sm-6 mb-sm-50">
                                        <div class="item">
                                            <div class="item-txt text-center f1">
                                                <h2 class="fw-6">Missão</h2>
                                                <p class="fw-4"><?php echo $voResultadoMissaoVisaoValores->texto_missao ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50">
                                        <div class="item">
                                            <div class="item-txt text-center f1">
                                                <h2 class="fw-6">Visão</h2>
                                                <p class="fw-4"><?php echo $voResultadoMissaoVisaoValores->texto_visao ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-xs-offset-0">
                                        <div class="item">
                                            <div class="item-txt text-center f1">
                                                <h2 class="fw-6">Valores</h2>
                                                <p class="fw-4"><?php echo $voResultadoMissaoVisaoValores->texto_valores ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <section class="blog fadeInUp" id="projetos">
                        <div class="section-header2 text-center">
                            <h2 class="f2 c1">Conheça as</h2>
                            <h1 class="f1 fw-7 c4 pb-60">Marcas que trabalhamos</h1>
                        </div>
                        <div class="container">
                            <?php
                            $vsSqlCertificacao = "SELECT imagem_destaque, titulo FROM `informacoes` WHERE id_paginas = 3";
                            $vrsExecutaCertificacao = mysqli_query($Conexao, $vsSqlCertificacao) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                            while ($voResultadoCertificacao = mysqli_fetch_object($vrsExecutaCertificacao)) {
                                ?>
                                <img src="<?php echo URL ?>wdadmin/uploads/informacoes/<?php echo $voResultadoCertificacao->imagem_destaque ?>" title="<?php echo $voResultadoCertificacao->titulo ?>" alt="<?php echo $voResultadoCertificacao->titulo ?>">
                                <?php
                            }
                            ?>
                        </div>
                    </section>
                </div>

                <footer>
                    <?php
                    include 'php/footer.php';
                    ?>
                </footer>    

            </div>
            <div class="back2Top bg1"> <i class="fa fa-angle-up fa-2x cw"></i></div>

            <?php
            /* CSS */
            include 'php/css.php';

            /* SCRIPT */
            include 'php/script.php';
            ?>

        </div>

    </body>

</html>