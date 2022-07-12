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
        <title><?php echo $voResultadoConfiguracoes->titulo ?> - Contato</title>
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
                    <h2 class="f2 c3 pt-20 p-t-30">Contato</h2>
                    <h1 class="f1 fw-7 cw">Entre em contato conosco</h1>
                </div>
            </div>

            <div class="page-content">
                <div class="contact-page f1">
                    <div class="contact-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="item">
                                        <h3 class="fw-7 c4">Endereço</h3>
                                        <?php
                                        $vsSqlEnderecos = "SELECT endereco, cidade, estado FROM enderecos";
                                        $vrsExecutaEnderecos = mysqli_query($Conexao, $vsSqlEnderecos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                                        while ($voResultadoEnderecos = mysqli_fetch_object($vrsExecutaEnderecos)) {
                                            ?>
                                            <p class="txt-normal"><?php echo $voResultadoEnderecos->endereco ?><br>
                                                <?php echo $voResultadoEnderecos->cidade ?> - <?php echo $voResultadoEnderecos->estado ?><p><br>
                                                <?php
                                            }
                                            ?>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="item">
                                        <h3 class="fw-7 c4">Horário de Atendimento</h3>
                                        <p class="txt-normal"><?php echo $voResultadoConfiguracoes->horario_atendimento ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="item">
                                        <h3 class="fw-7 c4">Informações para Contato</h3>
                                        <p class="txt-normal">
                                            E-mail: <?php echo $voResultadoConfiguracoes->email ?><br>
                                            Telefone: <?php echo $voResultadoConfiguracoes->telefone ?><br>
                                            WhatsApp: <?php echo $voResultadoConfiguracoes->whatsapp ?>
                                        </p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="contact-middle">
                        <div class="section-header text-center p-60">
                            <h2 class="f2 c1">Entre em</h2>
                            <h1 class="f1 fw-7 c4">Contato Conosco</h1>
                        </div>
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-sm-offset-0">
                                    <form id="form_contato" method="post" enctype="multipart/form-data">
                                        <input type="hidden" id="vsUrl" name="vsUrl" value="<?php echo URL ?>" />
                                        <input type="hidden" id="vsEmailContato" name="vsEmailContato" value="<?php echo EMAIL_CONTATO ?>" />
                                        <input type="hidden" id="vsNomeEmpresa" name="vsNomeEmpresa" value="<?php echo $voResultadoConfiguracoes->nome_empresa ?>" />
                                        <div class="row">
                                            <div class="col-md-6 mb-30">
                                                <input type="text" placeholder="Nome" name="vsNome" id="vsNome" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="tel" placeholder="Telefone" name="vsTelefone" id="vsTelefone" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="email" placeholder="E-mail" name="vsEmail" id="vsEmail" required>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="text" placeholder="Assunto" name="vsAssunto" id="vsAssunto" required>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <textarea placeholder="Mensagem" name="vsMensagem" id="vsMensagem" required></textarea>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button id="botao_enviar_mensagem" type="submit" class="thm-btn cw bg2"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar Mensagem</button>
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
        <script src="<?php echo URL ?>wdadmin/js/contato.js"></script>

    </body>
</html>