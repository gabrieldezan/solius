<!DOCTYPE html>
<html lang="zxx">

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
        <title><?php echo $voResultadoConfiguracoes->titulo ?> - Orçamento</title>
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
                    <h2 class="f2 c3 p-t-30">Ficou Interessado</h2>
                    <h1 class="f1 fw-7 cw">Faça um Orçamento</h1>
                </div>
            </div>
            <div class="page-content">
                <div class="contact-page f1">
                    <div class="contact-middle">
                        <div id="orcamento" class="container mt-5">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-sm-offset-0">
                                    <form id="form_orcamento" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="vsUrl" name="vsUrl" value="<?php echo URL ?>" />
                                        <input type="hidden" id="vsEmailContato" name="vsEmailContato" value="<?php echo EMAIL_CONTATO ?>" />
                                        <input type="hidden" id="vsNomeEmpresa" name="vsNomeEmpresa" value="<?php echo $voResultadoConfiguracoes->nome_empresa ?>" />
                                        <div class="row">
                                            <div class="col-md-6 mb-30">
                                                <input type="text" name="vsNome" id="vsNome" placeholder="Nome" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="text" name="vsEndereco" id="vsEndereco" placeholder="Endereço" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="email" placeholder="E-mail" name="vsEmail" id="vsEmail" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="tel" name="vsTelefone" id="vsTelefone" placeholder="Telefone" required>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <input type="text" name="vsConsumo" id="vsConsumo" placeholder="Consumo" required>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <textarea type="text" name="vsMensagem" id="vsMensagem" placeholder="Sua Mensagem" required></textarea>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button id="botao_enviar_mensagem" type="submit" class="thm-btn cw bg2"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar Dados</button>
                                            </div>
                                        </div>
                                    </form>
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

        <div class="back2Top bg1">
            <i class="fa fa-angle-up fa-2x cw"></i>
        </div>

        <?php
        /* CSS */
        include 'php/css.php';

        /* SCRIPT */
        include 'php/script.php';
        ?>

        <link href="<?php echo URL ?>wdadmin/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <script src="<?php echo URL ?>wdadmin/js/mask.js"></script>
        <script src="<?php echo URL ?>wdadmin/js/orcamento.js"></script>

    </body>
</html>