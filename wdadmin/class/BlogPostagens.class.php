<?php

require_once "Conexao.class.php";

class BlogPostagens extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_blog_postagem;
    private $titulo;
    private $texto;
    private $imagem;
    private $data_criacao;
    private $data_publicacao;
    private $url_amigavel;
    private $id_usuarios;
    private $id_blog_marcadores;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_blog_postagem === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO blog_postagem (
                        titulo,
                        texto,
                        imagem,                        
                        data_criacao,
                        data_publicacao,
                        url_amigavel,
                        id_usuarios,
                        id_blog_marcadores
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->texto",
                    "$this->imagem",
                    "$this->data_criacao",
                    "$this->data_publicacao",
                    "$this->url_amigavel",
                    "$this->id_usuarios",
                    "$this->id_blog_marcadores"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE blog_postagem SET 
                        titulo = ?,
                        texto = ?,
                        imagem = ?,                        
                        data_publicacao = ?,
                        url_amigavel = ?,
                        id_blog_marcadores = ?
                    WHERE 
                        id_blog_postagem = ?;
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->texto",
                    "$this->imagem",
                    "$this->data_publicacao",
                    "$this->url_amigavel",
                    "$this->id_blog_marcadores",
                    "$this->id_blog_postagem"
                ));
                $this->setRetorno_dados($this->id_blog_postagem);
            }
            return true;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== FUNÇÃO CONSULTA DADOS =============== */

    public function consulta_dados() {

        try {
            $pdo = parent::getDB();

            if ($this->id_blog_marcadores != "T") {
                $vsWhereFiltro = "WHERE bm.id_blog_marcadores = $this->id_blog_marcadores";
            } else {
                $vsWhereFiltro = "";
            }

            $consulta_dados = $pdo->prepare("
                SELECT 
                    bp.visualizacoes,
                    bp.id_blog_postagem,
                    bp.imagem,
                    bp.titulo,                    
                    bm.descricao as marcador,
                    u.nome as usuario,
                    bp.data_criacao,
                    DATE_FORMAT(bp.data_criacao, '%d/%m/%Y às %H:%i') AS data_criacao_formatado,
                    bp.data_publicacao,
                    DATE_FORMAT(bp.data_publicacao, '%d/%m/%Y às %H:%i') AS data_publicacao_formatado,
                    IF(NOW()>=bp.data_publicacao, 'success', 'info') as cor_linha
                FROM
                    blog_postagem bp
                    INNER JOIN blog_marcadores bm ON bp.id_blog_marcadores = bm.id_blog_marcadores
                    INNER JOIN usuarios u ON bp.id_usuarios = u.id_usuarios
                $vsWhereFiltro
                ORDER BY
                    data_publicacao DESC
            ");
            $consulta_dados->execute();
            if ($consulta_dados->rowCount() > 0):
                $this->setRetorno_dados(json_encode($consulta_dados->fetchAll()));
                return true;
            else:
                return false;
            endif;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== FUNÇÃO EDITA DADOS =============== */

    public function edita_dados() {

        try {
            $pdo = parent::getDB();

            $edita_dados = $pdo->prepare("
                SELECT
                    titulo,
                    texto,
                    imagem,                        
                    DATE_FORMAT(data_publicacao, '%Y-%m-%dT%H:%i') AS data_publicacao,
                    id_blog_marcadores
                FROM
                    blog_postagem
                WHERE
                    id_blog_postagem =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_blog_postagem"
            ));
            if ($edita_dados->rowCount() > 0):
                $this->setRetorno_dados(json_encode($edita_dados->fetchAll()));
                return true;
            else:
                return false;
            endif;
        } catch (Exception $e) {
            echo 'Erro: ' . $e->getMessage();
            return false;
        }
    }

    /* =============== GETTERS E SETTERS =============== */

    function getId_blog_postagem() {
        return $this->id_blog_postagem;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getTexto() {
        return $this->texto;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getData_criacao() {
        return $this->data_criacao;
    }

    function getData_publicacao() {
        return $this->data_publicacao;
    }

    function getUrl_amigavel() {
        return $this->url_amigavel;
    }

    function getId_usuarios() {
        return $this->id_usuarios;
    }

    function getId_blog_marcadores() {
        return $this->id_blog_marcadores;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_blog_postagem($id_blog_postagem) {
        $this->id_blog_postagem = $id_blog_postagem;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setData_criacao($data_criacao) {
        $this->data_criacao = $data_criacao;
    }

    function setData_publicacao($data_publicacao) {
        $this->data_publicacao = $data_publicacao;
    }

    function setUrl_amigavel($url_amigavel) {
        $this->url_amigavel = $url_amigavel;
    }

    function setId_usuarios($id_usuarios) {
        $this->id_usuarios = $id_usuarios;
    }

    function setId_blog_marcadores($id_blog_marcadores) {
        $this->id_blog_marcadores = $id_blog_marcadores;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
