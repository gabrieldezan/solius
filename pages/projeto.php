<?php
$vsSqlProjeto = "
    SELECT
        titulo,
        descricao,
        link1,
        link2,
        youtube,
        imagem1,
        imagem2,
        imagem3,
        imagem4,
        imagem5,
        id_galeria_imagem
    FROM
        galeria_imagem
    WHERE
        url_amigavel = '$parametro'
";
$vrsExecutaProjeto = mysqli_query($Conexao, $vsSqlProjeto) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
$vrsQntProjeto = mysqli_num_rows($vrsExecutaProjeto);
if ($vrsQntProjeto > 0) {
    $voResultadoProjeto = mysqli_fetch_object($vrsExecutaProjeto);
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] ?><?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjeto->imagem1 ?>"/>
            <meta property="og:type" content="website"/>
            <meta property="og:title" content="<?php echo $voResultadoProjeto->titulo . " - " . $voResultadoConfiguracoes->titulo ?>"/>
            <meta property="og:description" content="<?php echo $voResultadoConfiguracoes->descricao ?>"/>
            <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] ?><?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjeto->imagem1 ?>"/>
            <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->titulo ?>"/>
            <meta property="fb:admins" content="<?php echo $voResultadoConfiguracoes->facebook ?>"/>
            <meta name="description" content="<?php echo $voResultadoConfiguracoes->descricao ?>">
            <title><?php echo $voResultadoConfiguracoes->titulo ?> - <?php echo $voResultadoProjeto->titulo ?></title>
            <style type="text/css">.preloader{background:#118442;height:100%;left:0;position:fixed;top:0;width:100%;z-index:9999999}.preloader.thm-gradient-two{background:#4c1da2;background:-webkit-gradient(left top,right top,color-stop(0,#4c1da2),color-stop(100%,#bc5f9d));background:-webkit-gradient(linear,left top,right top,from(#4c1da2),to(#bc5f9d));background:linear-gradient(to right,#4c1da2 0,#bc5f9d 100%)}.preloader.yellow-bg{background:#ffb907;background:-webkit-gradient(left top,right top,color-stop(0,#ffb907),color-stop(100%,#ffd84f));background:-webkit-gradient(linear,left top,right top,from(#ffb907),to(#ffd84f));background:linear-gradient(to right,#ffb907 0,#ffd84f 100%)}.preloader .spinner{width:60px;height:60px;position:absolute;top:50%;left:50%;margin-top:-30px;margin-left:-30px;background-color:#fff;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}</style>

            <?php
            include 'php/head.php';
            ?>
        </head>

        <body>

            <header>
                <?php
                include 'php/menu.php';
                ?>
            </header>

            <div class="preloader"><div class="spinner"></div></div>
            <div class="page-wrapper">
                <div class="op-header">
                    <div class="section-header text-center">
                        <h1 class="f1 fw-7 p-t-30 cw"><?php echo $voResultadoProjeto->titulo ?></h1>
                    </div>
                </div>
                <div class="page-content">
                    <div class="news-single">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <div class="single-news-content">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="card-txt">
                                                    <div class="info f2"></div>
                                                    <h2 class="card-title f1 fw-7">
                                                        <?php echo $voResultadoProjeto->titulo ?>
                                                    </h2>
                                                </div>
                                                <p class="txt-normal"><?php echo $voResultadoProjeto->descricao ?></p>
                                                <p class="txt-normal"><?php echo $voResultadoProjeto->link1 ?></p>
                                                <p class="txt-normal"><?php echo $voResultadoProjeto->link2 ?></p>
                                                <p class="txt-normal"><?php echo $voResultadoProjeto->youtube ?></p>
                                            </div>
                                            <img class="col-md-6 col-sm-12 col-xs-12" src="<?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjeto->imagem1 ?>" alt="<?php echo $voResultadoProjeto->titulo ?>" title="<?php echo $voResultadoProjeto->titulo ?>">  
                                            <?php
                                            if ($voResultadoProjeto->imagem2 != null || !empty($voResultadoProjeto->imagem2)) {
                                                ?>
                                                <img class="col-md-6 col-sm-12 col-xs-12 p-t-10" src="<?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjeto->imagem2 ?>" alt="<?php echo $voResultadoProjeto->titulo ?>" title="<?php echo $voResultadoProjeto->titulo ?>">  
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            if ($voResultadoProjeto->imagem3 != null || !empty($voResultadoProjeto->imagem3)) {
                                                ?>
                                                <img class="col-md-6 col-sm-12 col-xs-12 p-t-10" src="<?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjeto->imagem3 ?>" alt="<?php echo $voResultadoProjeto->titulo ?>" title="<?php echo $voResultadoProjeto->titulo ?>">  
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            if ($voResultadoProjeto->imagem4 != null || !empty($voResultadoProjeto->imagem4)) {
                                                ?>
                                                <img class="col-md-6 col-sm-12 col-xs-12 p-t-10" src="<?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjeto->imagem4 ?>" alt="<?php echo $voResultadoProjeto->titulo ?>" title="<?php echo $voResultadoProjeto->titulo ?>">  
                                                <?php
                                            }
                                            ?>

                                            <?php
                                            if ($voResultadoProjeto->imagem5 != null || !empty($voResultadoProjeto->imagem5)) {
                                                ?>
                                                <img class="col-md-6 col-sm-12 col-xs-12 p-t-10" src="<?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjeto->imagem5 ?>" alt="<?php echo $voResultadoProjeto->titulo ?>" title="<?php echo $voResultadoProjeto->titulo ?>">  
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class = "col-md-4">
                                    <div class = "news-sidebar p-40 f1">
                                        <h2>Projetos Relacionados</h2>
                                        <div class = "media-list">
                                            <?php
                                            $vsSqlProjetosRelacionados = "SELECT titulo, imagem1, id_galeria_imagem, url_amigavel FROM `galeria_imagem` WHERE id_galeria_imagem !=$voResultadoProjeto->id_galeria_imagem";
                                            $vrsExecutaProjetosRelacionados = mysqli_query($Conexao, $vsSqlProjetosRelacionados) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                            while ($voResultadoProjetosRelacionados = mysqli_fetch_object($vrsExecutaProjetosRelacionados)) {
                                                ?>
                                                <div class="media">
                                                    <a class="pull-left" href="<?php echo URL ?>projetos/<?php echo $voResultadoProjetosRelacionados->url_amigavel ?>">
                                                        <img class="media-object" src="<?php echo URL ?>wdadmin/uploads/galeria_imagens/<?php echo $voResultadoProjetosRelacionados->imagem1 ?>" alt="<?php echo $voResultadoProjetosRelacionados->titulo ?>" title="<?php echo $voResultadoProjetosRelacionados->titulo ?>">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="<?php echo URL ?>projetos/<?php echo $voResultadoProjetosRelacionados->url_amigavel ?>"><?php echo $voResultadoProjetosRelacionados->titulo ?></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
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

    <?php
} else {
    include "pages/404.php";
}