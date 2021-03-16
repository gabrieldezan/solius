$(document).ready(function () {

    vsUrl = $("#vsUrl").val();

    /*ALTERA TITULO DA PAGINA*/
    $(this).attr("title", "WD Admin - Cadastro de Grupos da Vitrine");

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

    $("#form_vitrine_grupos").on('submit', (function (e) {

        Loading();

        e.preventDefault();
        $.ajax({
            url: vsUrl + "controllers/SalvaDadosVitrineGrupo.php",
            type: "POST",
            async: true,
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data > 0) {
                    $("#inputIdVitrineGrupos").val(data);
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
    var id = $("#inputIdVitrineGrupos").val();

    /*CASO EXISTA O ID, EXECUTA A FUNÇÃO DE EDIÇÃO*/
    if (id !== "") {
        edita_vitrine_grupos(id);
    } else {
        CloseLoading();
    }
}

/*CARREGA DADOS DO USUÁRIO SELECIONADO*/
function edita_vitrine_grupos(viIdVitrineGrupos) {

    $.ajax({
        url: vsUrl + "controllers/RetornaVitrineGrupoSelecionado.php",
        type: "POST",
        dataType: "json",
        async: false,
        data: ({
            viIdVitrineGrupos: viIdVitrineGrupos
        }),
        success: function (data) {
            if (data !== 0) {
                $("#inputDescricao").val(data[0].descricao);
                $("#inputImagemAtual").val(data[0].imagem);
                $("#imgImagemAtual").attr("src", vsUrl + "uploads/vitrine_grupo/" + data[0].imagem);
                $("#inputStatus").val(data[0].status);
                CloseLoading();
            } else {
                AvisoPersonalizado("Dados não encontrados!");
                $("#inputIdVitrineGrupos").val("");
            }
            CloseLoading();
        },
        error: function () {
            CloseLoading();
            Erro();
        }
    });
}