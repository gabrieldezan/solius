<nav class="navbar nav-fixed mb-0">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu"> <span></span>  <span></span>  <span></span> 
            </button>
            <a class="navbar-brand pt-0" href="<?php echo URL ?>">
                <img src="<?php echo URL ?>wdadmin/uploads/informacoes_gerais/<?php echo $voResultadoConfiguracoes->logo_principal ?>" alt="logo Solius" title="<?php echo $voResultadoConfiguracoes->descricao ?>">
                <img src="<?php echo URL ?>wdadmin/uploads/informacoes_gerais/<?php echo $voResultadoConfiguracoes->logo_secundaria ?>" title="<?php echo $voResultadoConfiguracoes->descricao ?>" alt="logo Solius">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="main-menu">
            <ul class="nav navbar-nav social-nav navbar-right">
                <li><a target="_blank" href="https://www.facebook.com.br/<?php echo $voResultadoConfiguracoes->facebook ?>"> <i class="fa fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="https://www.instagram.com/<?php echo $voResultadoConfiguracoes->facebook ?>"> <i class="fa fa-instagram"></i></a></li>
                <li><a target="_blank" href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?php echo str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>"> <i class="fa fa-whatsapp"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right f1 mainMenu text-capitalize">
                <li><a href="<?php echo URL ?>">Home</a></li>
                <li><a href="<?php echo URL ?>sobre">Sobre</a></li>
                <li><a href="<?php echo URL ?>#vantagens">Vantagens</a></li>
                <li><a href="<?php echo URL ?>#servicos">Serviços</a>
                    <ul class="sub-menu">
                        <?php
                        $vsSqlServicos = "SELECT titulo, url_amigavel FROM `servicos` WHERE status = 1 ORDER BY titulo";
                        $vrsExecutaServicos = mysqli_query($Conexao, $vsSqlServicos) or die("Erro ao efetuar a operação no banco de dados! <br> Arquivo:" . __FILE__ . "<br>Linha:" . __LINE__ . "<br>Erro:" . mysqli_error($Conexao));
                        while ($voResultadoServicos = mysqli_fetch_object($vrsExecutaServicos)) {
                            ?>
                            <li><a href="<?php echo URL ?>servico/<?php echo $voResultadoServicos->url_amigavel ?>"><?php echo $voResultadoServicos->titulo ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="<?php echo URL ?>projetos">Projetos</a></li>
                <li><a href="<?php echo URL ?>contato">contato</a></li>
                <li><a class="btn-orcamento" href="<?php echo URL ?>orcamento">Orçamento</a></li>
            </ul>
        </div>
    </div>
</nav>