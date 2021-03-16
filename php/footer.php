<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb-xs-30">
                <a href="<?php echo URL ?>"><img src="<?php echo URL ?>wdadmin/uploads/informacoes_gerais/<?php echo $voResultadoConfiguracoes->logo_principal ?>" alt="Logo Solius" title="<?php echo $voResultadoConfiguracoes->descricao ?>"></a>
            </div>
            <div class="col-sm-6">
                <ul class="list-inline text-right">
                    <li><a target="_blank" href="https://www.facebook.com.br/<?php echo $voResultadoConfiguracoes->instagram ?>"> <i class="fa fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/<?php echo $voResultadoConfiguracoes->instagram ?>"> <i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?php echo str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>"> <i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer-middle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="fooler-col f1">
                        <h2 class="footer-title">menu</h2>
                        <ul class="max-content">
                            <li><a href="<?php echo URL ?>">Home</a></li>
                            <li><a href="<?php echo URL ?>sobre">Sobre</a></li>
                            <li><a href="<?php echo URL ?>projetos">Projetos</a></li>
                            <li><a href="<?php echo URL ?>orcamento">Orçamento</a></li>
                            <li><a href="<?php echo URL ?>contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fooler-col f1">
                        <h2 class="footer-title">serviços</h2>
                        <ul class="width-260">
                            <?php
                            $vsSqlServicos = "SELECT titulo ,url_amigavel FROM `servicos` WHERE status = 1 ORDER BY titulo";
                            $vrsExecutaServicos = mysqli_query($Conexao, $vsSqlServicos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                            while ($voResultadoServicos = mysqli_fetch_object($vrsExecutaServicos)) {
                                ?>
                                <li><a href="<?php echo URL ?>servico/<?php echo $voResultadoServicos->url_amigavel ?>"><?php echo $voResultadoServicos->titulo ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fooler-col f1">
                        <div class="footer-contact max-content">
                            <h2 class="footer-title">Horário de Atendimento</h2>
                            <h3><?php echo $voResultadoConfiguracoes->horario_atendimento ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fooler-col f1">
                        <div class="footer-contact max-content">
                            <h2 class="footer-title">Contato</h2>
                            <h3><?php echo $voResultadoConfiguracoes->endereco ?></h3>
                            <h3><?php echo $voResultadoConfiguracoes->cidade ?> - <?php echo $voResultadoConfiguracoes->estado ?></h3>
                            <ul>
                                <li class="mb-5"><i class="fa fa-envelope"></i><a href="mailto:<?php echo $voResultadoConfiguracoes->email ?>"> <?php echo $voResultadoConfiguracoes->email ?></a></li>
                                <li class="mb-5"><i class="fa fa-phone-square"></i><a href="tel:+55<?php echo str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->telefone) ?>"> <?php echo $voResultadoConfiguracoes->telefone ?></a></li>
                                <li class="mb-5"><i class="fa fa-whatsapp"></i><a target="_blank" href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?php echo str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>"> <?php echo $voResultadoConfiguracoes->whatsapp ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom f1">
    <div class="container">
        <div class="col-md-6 footer-text">
            <p><a href="<?php echo URL ?>"><?php echo $voResultadoConfiguracoes->nome_empresa ?></a>. Todos os direitos reservados.</p>
        </div>
        <div class="col-md-6 text-right mb-mobile">
            <a target="_blank" href="https://webdezan.com.br/">
                <img src="<?php echo URL ?>img/logo/logo-wd.png" title="Web Dezan Agência Digital" alt="Logo-WD" class="rounded mx-auto d-block">
            </a>
        </div>
    </div>
</div>