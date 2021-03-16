<?php

require_once "Conexao.class.php";

class EquipeContato extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_equipe_contato;
    private $titulo;
    private $icone;
    private $link;
    private $id_equipe;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_equipe_contato === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO equipe_contato (
                        titulo,
                        icone,
                        link,
                        id_equipe
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->icone",
                    "$this->link",
                    "$this->id_equipe"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE equipe_contato SET 
                        titulo = ?,
                        icone = ?,
                        link = ?,
                        id_equipe = ?
                    WHERE 
                        id_equipe_contato = ?;
                ');
                $salva_dados->execute(array(
                    "$this->titulo",
                    "$this->icone",
                    "$this->link",
                    "$this->id_equipe",
                    "$this->id_equipe_contato"
                ));
                $this->setRetorno_dados($this->id_equipe_contato);
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

            $consulta_dados = $pdo->prepare("
                SELECT
                    id_equipe_contato,
                    titulo,
                    icone,
                    link
                FROM
                    equipe_contato
                WHERE
                    id_equipe = $this->id_equipe
                ORDER BY
                    titulo
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
                    icone,
                    link
                FROM
                    equipe_contato
                WHERE
                    id_equipe_contato =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_equipe_contato"
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

    function getId_equipe_contato() {
        return $this->id_equipe_contato;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getIcone() {
        return $this->icone;
    }

    function getLink() {
        return $this->link;
    }

    function getId_equipe() {
        return $this->id_equipe;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_equipe_contato($id_equipe_contato) {
        $this->id_equipe_contato = $id_equipe_contato;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setIcone($icone) {
        $this->icone = $icone;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setId_equipe($id_equipe) {
        $this->id_equipe = $id_equipe;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
