<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->favicon ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="<?php echo $voResultadoConfiguracoes->descricao ?>">
        <meta name="author" content="Web Dezan - Agência Digital">
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta property="og:url" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "404" ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php echo $voResultadoConfiguracoes->titulo . " - 404" ?>"/>
        <meta property="og:description" content="<?php echo substr(strip_tags(trim($voResultadoConfiguracoes->descricao)), 0, strrpos(substr(strip_tags(trim($voResultadoConfiguracoes->descricao)), 0, 197), ' ')) . '...'; ?>"/>
        <meta property="og:image" content="<?php echo "https://" . $_SERVER['HTTP_HOST'] . URL . "404" ?>"/>
        <meta property="og:site_name" content="<?php echo $voResultadoConfiguracoes->nome_empresa ?>"/>
        <meta property="fb:admins" content="<?php echo $voResultadoConfiguracoes->facebook ?>"/>
        <title><?php echo $voResultadoConfiguracoes->titulo . " - 404" ?></title>
        <style type="text/css">.load-position .logo{margin:0 auto;width:150px}.load-complete .ball-clip-rotate>div{border-color:#adc23d #adc23d transparent;background-color:#adc23d;margin:0 auto;display:block;top:50%;position:absolute;left:0;right:0}.load-complete{position:fixed;background:#fff;width:100%;height:100%;left:0;right:0;top:0;bottom:0;z-index:1031}.load-complete .logo{color:#4c4c4c;text-align:center;display:block;margin-bottom:20px;font-family:Roboto,sans-serif;font-size:50px}.load-complete .load-position h6{text-align:center;color:#000;font-size:12px;font-weight:400;font-style:italic}.load-complete .load-position{position:absolute;top:50%;left:0;z-index:999;right:0;margin-top:-100px}.load-complete .loading{position:absolute;width:100%;height:1px;margin:20px auto;left:0;right:0}.load-complete .loading-line{position:absolute;background:#eee;width:100%;height:2px}.load-complete .loading-break{position:absolute;background:#059664;width:15px;height:2px}.load-complete .loading-dot-1{-webkit-animation:loading 2s infinite;-moz-animation:loading 2s infinite;-ms-animation:loading 2s infinite;-o-animation:loading 2s infinite;animation:loading 2s infinite}.load-complete .loading-dot-2{-webkit-animation:loading 2s .5s infinite;-moz-animation:loading 2s .5s infinite;-ms-animation:loading 2s .5s infinite;-o-animation:loading 2s .5s infinite;animation:loading 2s .5s infinite}.load-complete .loading-dot-3{-webkit-animation:loading 2s 1s infinite;-moz-animation:loading 2s 1s infinite;-ms-animation:loading 2s 1s infinite;-o-animation:loading 2s 1s infinite;animation:loading 2s 1s infinite}@keyframes loading{from{left:0}to{left:100%}}@-moz-keyframes loading{from{left:0}to{left:100%}}@-webkit-keyframes loading{from{left:0}to{left:100%}}@-ms-keyframes loading{from{left:0}to{left:100%}}@-o-keyframes loading{from{left:0}to{left:100%}}</style>
    </head>

    <body>
        <div class="preloader"><div class="spinner"></div></div>
        <div class="page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="margin-top: 150px;">
                        <center>
                            <img src="<?php echo URL . "wdadmin/uploads/informacoes_gerais/" . $voResultadoConfiguracoes->logo_principal ?>" alt="<?php echo $voResultadoConfiguracoes->nome_empresa ?>" title="<?php echo $voResultadoConfiguracoes->nome_empresa ?>">
                            <br/>
                            <br/>
                            <br/>
                            <h1>404</h1>
                            <h4 style="color:#118442">Página não encontrada</h4>
                            <br/>
                            <br/>
                            <a href="<?php echo URL ?>" class="thm-btn cw bg2 mt-10">Voltar a Página Inicial</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <?php
        /* CSS */
        include 'php/css.php';

        /* SCRIPT */
        include 'php/script.php';
        ?>

    </body>

</html>