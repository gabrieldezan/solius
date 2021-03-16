<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Cadastro de Postagens do Blog</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/inicio">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo URL ?>wdadmin/blog-postagens">Postagens do Blog</a></li>
            <li class="breadcrumb-item active">Cadastro</li>
        </ol>
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#cadastro" role="tab">
                                <span class="hidden-sm-up"><i class="far fa-edit" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="far fa-edit" aria-hidden="true"></i>&nbsp;Cadastro</span>
                            </a>
                        </li>
                        <li class="botao_novo" style="right: 80px">
                            <a class="btn btn-outline-secondary btn-sm" href="<?php echo URL ?>wdadmin/blog-imagens" target="_blank">
                                <span class="hidden-sm-up"><i class="fas fa-image" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-image" aria-hidden="true"></i>&nbsp;Imagens do Blog</span>
                            </a>
                        </li>
                        <li class="botao_novo">
                            <a class="btn btn-info btn-sm" href="<?php echo URL ?>wdadmin/blog-postagens/cadastro">
                                <span class="hidden-sm-up"><i class="fas fa-plus" aria-hidden="true"></i></span>
                                <span class="hidden-xs-down"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Novo</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <!--PAINEL CADASTRO-->
                        <div class="tab-pane p-20 active" id="cadastro" role="tabpanel">
                            <form id="form_blog_postagens" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row">
                                    <div class="col-12 col-sm-3 col-xlg-5">
                                        <input type="hidden" id="inputIdBlogPostagens" name="inputIdBlogPostagens" value="<?php echo $id ?>" />
                                        <div class="form-group">
                                            <label>Título *</label>
                                            <input type="text" class="form-control form-control-sm" id="inputTitulo" name="inputTitulo" placeholder="ex.: Artigo de Exemplo" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Imagem</label>
                                            <div class="row">
                                                <div class="col-12 col-xlg-4">
                                                    <input type="hidden" id="inputImagemAtual" name="inputImagemAtual" />
                                                    <img id="imgImagemAtual" name="imgImagemAtual" src="" class="img-fluid" />
                                                </div>
                                                <div class="col-12 col-xlg-8">
                                                    <input type="file" class="dropify" id="inputImagem" name="inputImagem" data-height="100" accept=".jpg, .jpeg" />
                                                    <small id="fileHelp" class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Marcador *</label>
                                            <select class="form-control form-control-sm" id="inputIdBlogMarcadores" name="inputIdBlogMarcadores"></select>
                                        </div>
                                        <div class="form-group">
                                            <label>Data de Publicação *</label>
                                            <input type="datetime-local" class="form-control form-control-sm" id="inputDataPublicacao" name="inputDataPublicacao" required />
                                        </div>
                                        <div class="form-group text-right">
                                            <button id="botao_salvar" type="submit" class="btn btn-success btn-sm"><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Salvar</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-9 col-xlg-7">
                                        <div class="form-group row">
                                            <textarea name="inputTexto" id="inputTexto" class="form-control form-control-sm"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo URL ?>wdadmin/scripts/blog-postagens-cadastro.js"></script>