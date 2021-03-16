$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Postagens do Blog");

    $("#inputImagem").change(function () {

        if (this.files[0].size > 2000000) {
            AvisoPersonalizado("A imagem não pode ter mais que 2MB de tamanho.");
            $("#botao_salvar").attr("disabled", true);
        } else {
            var fr = new FileReader;

            fr.onload = function () {
                var img = new Image;

                img.onload = function () {
                    if (img.width > 1920 && this.height > 1080) {
                        AvisoPersonalizado("A imagem não pode ser maior que 1920x1080 pixels de dimensão.");
                        $("#botao_salvar").attr("disabled", true);
                    } else {
                        $("#botao_salvar").removeAttr("disabled");
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        }
    });

    if ($("#inputTexto").length > 0) {
        tinymce.init({
            selector: "textarea#inputTexto",
            language: 'pt_BR',
            language_url: vsUrl + '/js/pt_BR.js',
            theme: "modern",
            height: 570,
            width: '100%',
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

        });
    }

    monta_select("inputIdBlogMarcadores", "id_blog_marcadores", "descricao", "blog_marcadores", "WHERE status = 1", "descricao", "", false);

    $("#form_blog_postagens").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosBlogPostagens.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdBlogPostagens").val(data);
                    verifica_edicao();
                    Sucesso();
                } else {
                    CloseLoading();
                    Aviso();
                }
            },
            error: function () {
                CloseLoading();
                Erro();
            }
        });
        return false;
    }));

    /*CHAMA FUNÇÃO PARA VERIFICAR EDIÇÃO OU CADASTRO*/
    verifica_edicao();

});

/*FUNÇÃO QUE VERIFICA SE EXISTE UM ID*/
function verifica_edicao() {

    /*PEGA ID*/
    var id = $("#inputIdBlogPostagens").val();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_blog_postagem(id);
    } else {
        CloseLoading();
    }
}

/*CARREGA DADOS DO USUÁRIO SELECIONADO*/
function edita_blog_postagem(viIdBlogPostagens) {

    $.ajax({
        url: vsUrl + "controllers/RetornaBlogPostagensSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdBlogPostagens: viIdBlogPostagens
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputTitulo").val(data[0].titulo);
                $("#inputImagemAtual").val(data[0].imagem);
                $("#imgImagemAtual").attr("src", vsUrl + "uploads/blog_postagens/" + data[0].imagem);
                $("#inputIdBlogMarcadores").val(data[0].id_blog_marcadores);
                $("#inputDataPublicacao").val(data[0].data_publicacao);
                $("#inputTexto").val(data[0].texto);
                CloseLoading();
            } else {
                $("#inputIdBlogPostagens").val("");
                CloseLoading();
                AvisoPersonalizado("Dados não encontrados!");
            }
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}