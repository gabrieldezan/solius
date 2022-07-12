<?php
$vsSqlServico = "
    SELECT
        titulo,
        descricao,
        resumo,
        imagem
    FROM
        servicos
    WHERE
        url_amigavel = '$parametro' AND
        status = 1
";
$vrsExecutaServico = mysqli_query($Conexao, $vsSqlServico) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
$vrsQntServico = mysqli_num_rows($vrsExecutaServico);
if ($vrsQntServico > 0) {
    $voResultadoServico = mysqli_fetch_object($vrsExecutaServico);
    ?>
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
            <title><?php echo $voResultadoConfiguracoes->titulo ?> - <?php echo $voResultadoServico->titulo ?></title>
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
                    <div class="section-header text-center pt-20">
                        <h1 class="f1 fw-7 cw"><?php echo $voResultadoServico->titulo ?></h1>
                    </div>
                </div>
                <div class="page-content">
                    <div class="news-single">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-news-content">
                                        <div class="card-thumb mb-25">
                                            <img src="<?php echo URL ?>wdadmin/uploads/servicos/<?php echo $voResultadoServico->imagem ?>" alt="Geração Centralizada" title="Geração Centralizada">  
                                        </div>
                                        <div class="card-txt">
                                            <div class="info f2"></div>
                                            <h2 class="card-title f1 fw-7">
                                                <?php echo $voResultadoServico->titulo ?>
                                            </h2>
                                        </div>
                                        <p class="txt-normal"><?php echo $voResultadoServico->resumo ?></p>
                                        <br>
                                        <ul>
                                            <li><?php echo $voResultadoServico->descricao ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 max-content pl-0">
                                        <div class="pt-30">
                                            <a type="submit" href="<?php echo URL ?>orcamento" class="thm-btn cw bg2">Solicite um Orçamento</a>
                                        </div>
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