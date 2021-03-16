<?php

require_once "Conexao.class.php";

class VitrineSubgrupos extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_vitrine_subgrupo;
    private $descricao;
    private $status;
    private $nome_pagina;
    private $imagem_capa;
    private $id_vitrine_grupo;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_vitrine_subgrupo === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO vitrine_subgrupo (
                        descricao,
                        status,
                        nome_pagina,
                        imagem_capa,
                        id_vitrine_grupo
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->descricao",
                    "$this->status",
                    "$this->nome_pagina",
                    "$this->imagem_capa",
                    "$this->id_vitrine_grupo"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE vitrine_subgrupo SET 
                        descricao = ?,
                        status = ?,
                        nome_pagina = ?,
                        imagem_capa = ?,
                        id_vitrine_grupo = ?
                    WHERE 
                        id_vitrine_subgrupo = ?;
                ');
                $salva_dados->execute(array(
                    "$this->descricao",
                    "$this->status",
                    "$this->nome_pagina",
                    "$this->imagem_capa",
                    "$this->id_vitrine_grupo",
                    "$this->id_vitrine_subgrupo"
                ));
                $this->setRetorno_dados($this->id_vitrine_subgrupo);
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

            if ($this->id_vitrine_grupo != "T") {
                $vsWhereFiltro = "WHERE vs.id_vitrine_grupo = $this->id_vitrine_grupo";
            } else {
                $vsWhereFiltro = "";
            }

            $consulta_dados = $pdo->prepare("
                SELECT
                    vs.id_vitrine_subgrupo,
                    vg.descricao AS grupo,
                    vs.descricao,
                    CASE vs.status
                        WHEN 1 THEN 'success'
                        WHEN 0 THEN 'danger'
                    END AS status_class,
                    CASE vs.status
                        WHEN 1 THEN 'Ativo'
                        WHEN 0 THEN 'Inativo'
                    END AS status
                FROM
                    vitrine_subgrupo vs
                    LEFT JOIN vitrine_grupo vg ON vs.id_vitrine_grupo = vg.id_vitrine_grupo
                $vsWhereFiltro
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
                    descricao,
                    nome_pagina,
                    imagem_capa,
                    status,
                    id_vitrine_grupo
                FROM
                    vitrine_subgrupo
                WHERE
                    id_vitrine_subgrupo =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_vitrine_subgrupo"
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

    function getId_vitrine_subgrupo() {
        return $this->id_vitrine_subgrupo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getStatus() {
        return $this->status;
    }

    function getNome_pagina() {
        return $this->nome_pagina;
    }

    function getImagem_capa() {
        return $this->imagem_capa;
    }

    function getId_vitrine_grupo() {
        return $this->id_vitrine_grupo;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_vitrine_subgrupo($id_vitrine_subgrupo) {
        $this->id_vitrine_subgrupo = $id_vitrine_subgrupo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setNome_pagina($nome_pagina) {
        $this->nome_pagina = $nome_pagina;
    }

    function setImagem_capa($imagem_capa) {
        $this->imagem_capa = $imagem_capa;
    }

    function setId_vitrine_grupo($id_vitrine_grupo) {
        $this->id_vitrine_grupo = $id_vitrine_grupo;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
