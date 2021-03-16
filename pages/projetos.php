<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $voResultadoConfiguracoes->titulo ?>"/>
        <meta property="og:description" content="<?php echo $voResultadoConfiguracoes->descricao ?>"/>
        <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL ?>"/>
        <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->nome_empresa ?>"/>
        <meta property="fb:admins" content="<?php echo $voResultadoConfiguracoes->facebook ?>"/>
        <meta name="description" content="<?php echo $voResultadoConfiguracoes->descricao ?>">
        <title><?php echo $voResultadoConfiguracoes->titulo ?> - Projetos</title>
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
            <div class="op-header">
                <div class="section-header text-center">
                    <h1 class="f1 fw-7 cw p-t-30">Projetos</h1>
                </div>
            </div>
            <div class="page-content">
                <div class="project-content">
                    <div class="container">
                        <div class="gallery-filter mb-30 f1">
                            <ul class="post-filter masonary text-center list-inline text-capitalize">
                                <li class="filter active"><span class="fw-7" data-filter="all" class="filter">Todos</span></li>
                                <?php
                                $vsSql = "SELECT id_galeria_grupo, descricao FROM galeria_grupo WHERE status = 1 ORDER BY descricao";
                                $vrsExecuta = mysqli_query($Conexao, $vsSql) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                while ($voResultado = mysqli_fetch_object($vrsExecuta)) {
                                    ?>
                                    <li class="filter " data-filter=".filtro_<?php echo $voResultado->id_galeria_grupo ?>"> <span class="fw-7"><?php echo $voResultado->descricao; ?></span></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="row project-blocks masonary-layout filter-layout" data-filter-class="filter">
                            <?php
                            $vsSql = "SELECT gi.id_galeria_imagem, gi.titulo, gi.imagem1, url_amigavel, gi.id_galeria_grupo, link1, link2, youtube FROM galeria_imagem gi INNER JOIN galeria_grupo gg ON gi.id_galeria_grupo = gg.id_galeria_grupo ORDER BY gi.id_galeria_imagem DESC";
                            $vrsExecuta = mysqli_query($Conexao, $vsSql) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                            while ($voResultado = mysqli_fetch_object($vrsExecuta)) {
                                ?>
                                <div class="col-lg-4 col-sm-6 col-xs-12 filtro_<?php echo $voResultado->id_galeria_grupo ?> mt-30">
                                    <div class="item clearfix">
                                        <img src="<?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultado->imagem1 ?>" alt="<?php echo $voResultado->titulo ?>" title="<?php echo $voResultado->titulo ?>">
                                        <div class="item-content tnz bg2 cw f1">
                                            <h2 class="fw-7">
                                                <a href="<?php echo URL ?>projetos/<?php echo $voResultado->url_amigavel ?>"><?php echo $voResultado->titulo ?></a>
                                            </h2>
                                            <?php
                                            if ($voResultado->link1 != null || !empty($voResultado->link1)) {
                                                ?>
                                                <p class="fw-4 p-t-30"><i class="fa fa-bolt"></i> <?php echo $voResultado->link1 ?></p>
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            if ($voResultado->link2 != null || !empty($voResultado->link2)) {
                                                ?>
                                                <p class="fw-4"><i class="fa fa-plug"></i> <?php echo $voResultado->link2 ?></p>
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            if ($voResultado->youtube != null || !empty($voResultado->youtube)) {
                                                ?>
                                                <p class="fw-4"><i class="fa fa-line-chart"></i> <?php echo $voResultado->youtube ?></p>
                                                <?php
                                            }
                                            ?>

                                            <a href="<?php echo URL ?>projetos/<?php echo $voResultado->url_amigavel ?>" class="rdm"> <i class="fa fa-angle-right c2"></i></a>
                                        </div>
                                    </div>
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