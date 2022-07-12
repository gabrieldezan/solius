<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta property="og:url" content="https://solius.com.br"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Solius Energia Solar - Especialista em Usina Solar Fotovoltaica"/>
        <meta property="og:description" content="Energia Solar com equipamentos fotovoltaicos de qualidade e garantia de 10 anos é com a Solius. Converse com um especialista"/>
        <meta property="og:image" content="https://solius.com.br"/>
        <meta property="og:site_name" content="Solius Energia Solar Fotovoltaica"/>
        <meta property="fb:admins" content="solius.solar"/>
        <meta name="description" content="Energia Solar com equipamentos fotovoltaicos de qualidade e garantia de 10 anos é com a Solius. Converse com um especialista"/>
        <meta name="abstract" content="Usina de Energia Solar Fotovoltaica é com a Solius"/>
        <meta name="keywords" content="sistema fotovoltaico, energia solar, usina solar, placa solar, painel solar, empresa energia solar, placa fotovoltaica, kit solar residencial, energia solar foz do iguaçu, energia solar medianeira, energia solar dourados"/>
        <meta name="robot" content="all"/>
        <meta name="rating" content="general"/>
        <meta name="distribution" content="global"/>
        <title><?php echo $voResultadoConfiguracoes->titulo ?></title>
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

            <div class="main-slider ms1">
                <div class="banner-carousel owl-carousel">
                    <?php
                    $vsSqlBanner = "SELECT imagem, titulo, descricao, link FROM `banner` ORDER BY titulo";
                    $vrsExecutaBanner = mysqli_query($Conexao, $vsSqlBanner) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                    while ($voResultadoBanner = mysqli_fetch_object($vrsExecutaBanner)) {
                        ?>
                        <div class="ms1-item">
                            <img src="wdadmin/uploads/banners_slideshow/<?php echo $voResultadoBanner->imagem ?>" alt="<?php echo $voResultadoBanner->titulo ?>" title="<?php echo $voResultadoBanner->titulo ?>">
                            <div class="pos-r g-table">
                                <div class="d-middle">
                                    <div class="container crop">
                                        <div class="item-inner">
                                            <div class="head-lines f1 cw mb-50">
                                                <h1 class="fw-7"><?php echo $voResultadoBanner->titulo ?></h1>
                                            </div>
                                            <p class="f2 c3 fw-4"><?php echo $voResultadoBanner->descricao ?></p>
                                            <a href="<?php echo $voResultadoBanner->link ?>" class="thm-btn hvr-3 bg1 cw">Ver Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <section id="sobre" class="event fadeInUp" data-enllax-ratio="2.2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="event-content">
                                <div class="section-header">
                                    <h1 class="f1 fw-7 cw color-dark">Quem Somos</h1>
                                    <?php
                                    $vsSqlChamadaQuemSomos = "SELECT resumo_texto FROM `sobre`";
                                    $vrsExecutaChamadaQuemSomos = mysqli_query($Conexao, $vsSqlChamadaQuemSomos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                    while ($voResultadoChamadaQuemSomos = mysqli_fetch_object($vrsExecutaChamadaQuemSomos)) {
                                        ?>
                                        <p class="fw-6 f1 txt-normal mt-10"><?php echo $voResultadoChamadaQuemSomos->resumo_texto ?></p>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdt-40 botao-centro">
                            <a type="submit" href="<?php echo URL ?>sobre" class="thm-btn2 cw bg2 mt-10">Conheça a Solius</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="vantagens" class="projects fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 class="f2 c1">Energia Solar e suas</h2>
                        <h1 class="f1 fw-7 c4">Vantagens</h1>
                    </div>
                    <?php
                    $vsSqlVantagens = "SELECT imagem_destaque, titulo, texto FROM `informacoes` WHERE id_paginas = 1 ORDER BY titulo";
                    $vrsExecutaVantagens = mysqli_query($Conexao, $vsSqlVantagens) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                    $i = 1;
                    while ($voResultadoVantagens = mysqli_fetch_object($vrsExecutaVantagens)) {
                        if ($i % 2 == 0) {
                            ?>
                            <div class="project-area mg-tp-mb clearfix">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-8 col-xs-8 col-md-offset-3 col-sm-offset-2 col-xs-offset-2 col-lg-offset-0 project-box">
                                        <div class="row">
                                            <div class="col-lg-6 pl-0 col-lg-push-6">
                                                <img src="<?php echo URL ?>wdadmin/uploads/informacoes/<?php echo $voResultadoVantagens->imagem_destaque ?>" alt="<?php echo $voResultadoVantagens->titulo ?>" title="<?php echo $voResultadoVantagens->titulo ?>" class="border-img-vantagens">
                                            </div>
                                            <div class="col-lg-6 col-lg-pull-6">
                                                <div class="project-card">
                                                    <div class="section-header">
                                                        <h1 class="f1 fw-7 c4"><?php echo $voResultadoVantagens->titulo ?></h1>
                                                    </div>
                                                    <p class="fw-4 f1">
                                                        <?php echo $voResultadoVantagens->texto ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="project-area mg-tp-mb clearfix">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-8 col-xs-8 col-md-offset-3 col-sm-offset-2 col-xs-offset-2 col-lg-offset-0 project-box">
                                        <div class="col-lg-6 pl-0 pr-0">
                                            <img src="<?php echo URL ?>wdadmin/uploads/informacoes/<?php echo $voResultadoVantagens->imagem_destaque ?>" alt="<?php echo $voResultadoVantagens->titulo ?>" title="<?php echo $voResultadoVantagens->titulo ?>" class="border-img-vantagens">
                                        </div>
                                        <div class="col-lg-6 pl-0">
                                            <div class="project-card">
                                                <div class="section-header">
                                                    <h1 class="f1 fw-7 c4"><?php echo $voResultadoVantagens->titulo ?></h1>
                                                </div>
                                                <p class="fw-4 f1">
                                                    <?php echo $voResultadoVantagens->texto ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        $i++;
                    }
                    ?>
                </div>
            </section>
            <section class="servicos gray-background">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 class="f2 c1">Confira abaixo</h2>
                        <h1 class="f1 fw-7 c4">Como Funciona</h1>
                    </div>
                    <div class="demo">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 gray-background">
                                    <div class="main-timeline6">
                                        <?php
                                        $vsSqlComoFunciona = "SELECT icone, titulo, texto FROM `informacoes` WHERE id_paginas = 2";
                                        $vrsExecutaComoFunciona = mysqli_query($Conexao, $vsSqlComoFunciona) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                        $i = 1;
                                        while ($voResultadoComoFunciona = mysqli_fetch_object($vrsExecutaComoFunciona)) {
                                            if ($i % 2 == 0) {
                                                ?>
                                                <div class="timeline">
                                                    <div class="timeline-content">
                                                        <div class="content-inner">
                                                            <span class="icon"><i class="<?php echo $voResultadoComoFunciona->icone ?>"></i></span>
                                                            <h3 class="title"><?php echo $voResultadoComoFunciona->titulo ?></h3>
                                                            <p class="description">
                                                                <?php echo $voResultadoComoFunciona->texto ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="timeline">
                                                    <div class="timeline-content">
                                                        <div class="content-inner">
                                                            <span class="icon"><i class="<?php echo $voResultadoComoFunciona->icone ?>"></i></span>
                                                            <h3 class="title"><?php echo $voResultadoComoFunciona->titulo ?></h3>
                                                            <p class="description">
                                                                <?php echo $voResultadoComoFunciona->texto ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            $i++;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="servicos fadeInUp" id="servicos">
                <div class="container">
                    <div class="section-header2 text-center">
                        <h2 class="f2 c1">Conheça nossos</h2>
                        <h1 class="f1 fw-7 c4">Serviços</h1>
                    </div>
                    <div class="project-blocks">
                        <div class="row">
                            <?php
                            $vsSqlServicos = "SELECT titulo, resumo, imagem, url_amigavel FROM `servicos` WHERE status = 1 ORDER BY titulo";
                            $vrsExecutaServicos = mysqli_query($Conexao, $vsSqlServicos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                            while ($voResultadoServicos = mysqli_fetch_object($vrsExecutaServicos)) {
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 mt-60">
                                    <div class="item clearfix">
                                        <img src="<?php echo URL ?>wdadmin/uploads/servicos/<?php echo $voResultadoServicos->imagem ?>" alt="<?php echo $voResultadoServicos->titulo ?>" title="<?php echo $voResultadoServicos->titulo ?>">
                                        <div class="item-content tnz bg2 cw f1">
                                            <h2 class="fw-7">
                                                <a href="<?php echo URL ?>servico/<?php echo $voResultadoServicos->url_amigavel ?>"><?php echo $voResultadoServicos->titulo ?></a>
                                            </h2>
                                            <p class="fw-4"><?php echo $voResultadoServicos->resumo ?></p>
                                            <a href="<?php echo URL ?>servico/<?php echo $voResultadoServicos->url_amigavel ?>" class="rdm"><i class="fa fa-angle-right c2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blog gray-background fadeInUp" id="projetos">
                <div class="container">
                    <div class="section-header2 text-center">
                        <h2 class="f2 c1">confira nossos</h2>
                        <h1 class="f1 fw-7 c4 pb-60">Projetos</h1>
                    </div>
                    <div class="blog-post owl-carousel mg-bt45">
                        <?php
                        $vsSqlProjetos = "SELECT titulo, imagem1, url_amigavel FROM `galeria_imagem` ORDER BY id_galeria_imagem DESC";
                        $vrsExecutaProjetos = mysqli_query($Conexao, $vsSqlProjetos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoProjetos = mysqli_fetch_object($vrsExecutaProjetos)) {
                            ?>
                            <div class="col-md-4">
                                <div class="blog-card">
                                    <img src="<?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjetos->imagem1 ?>" alt="<?php echo $voResultadoProjetos->titulo ?>" title="<?php echo $voResultadoProjetos->titulo ?>">
                                    <div class="blog-text">
                                        <a href="<?php echo URL ?>projetos/<?php echo $voResultadoProjetos->url_amigavel ?>" class="title f1 fw-7 cw"> <span><?php echo $voResultadoProjetos->titulo ?></span></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-12 pd-mobile text-center">
                        <a type="submit" href="<?php echo URL ?>projetos" class="thm-btn cw bg2">Veja Todos os Projetos</a>
                    </div>
                </div>
            </section>
            <section class="event2 fadeInUp white-background" data-enllax-ratio="2.2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="event-content">
                                <div class="section-header">
                                    <div class="section-header text-center">
                                        <h2 class="f2 c3 pt-20 fonte-50">Faça parte dessa Revolução!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pdt-15 botao-centro">
                            <a type="submit" href="<?php echo URL ?>orcamento" class="thm-btn2 mt--12 cw2 bg4 mt-10">Solicite um Orçamento</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="page-content fadeInUp" id="clientes">
                <div class="py-80">
                    <div class="section-header2 text-center pb-60">
                        <h2 class="f2 c1">Conheça Alguns de</h2>
                        <h1 class="f1 fw-7 c4">Nossos Clientes</h1>
                    </div>
                    <div class="container">
                        <div class="brand-carousel owl-carousel">
                            <?php
                            $vsSqlClientes = "SELECT descricao, imagem FROM `clientes` ORDER BY descricao";
                            $vrsExecutaClientes = mysqli_query($Conexao, $vsSqlClientes) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                            while ($voResultadoClientes = mysqli_fetch_object($vrsExecutaClientes)) {
                                ?>
                                <div class="brandItem text-center">
                                    <a><img src="<?php echo URL ?>wdadmin/uploads/clientes/<?php echo $voResultadoClientes->imagem ?>" title="<?php echo $voResultadoClientes->descricao ?>" alt="<?php echo $voResultadoClientes->descricao ?>"></a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
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

    </body>

</html>