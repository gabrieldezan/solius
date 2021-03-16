<?php

require_once "Conexao.class.php";

class Equipe extends Conexao {
    /* =============== VARIAVEIS =============== */

    private $id_equipe;
    private $nome;
    private $cargo;
    private $imagem;
    private $status;
    private $retorno_dados;

    /* =============== FUNÇÃO SALVA DADOS =============== */

    public function salva_dados() {
        try {

            $pdo = parent::getDB();

            if ($this->id_equipe === "") {
                $salva_dados = $pdo->prepare('
                    INSERT INTO equipe (
                        nome,
                        cargo,
                        imagem,
                        status
                    ) VALUES (
                        ?,
                        ?,
                        ?,
                        ?
                    );
                ');
                $salva_dados->execute(array(
                    "$this->nome",
                    "$this->cargo",
                    "$this->imagem",
                    "$this->status"
                ));
                $this->setRetorno_dados($pdo->lastInsertId());
            } else {
                $salva_dados = $pdo->prepare('
                    UPDATE equipe SET 
                        nome = ?,
                        cargo = ?,
                        imagem = ?,
                        status = ?
                    WHERE 
                        id_equipe = ?;
                ');
                $salva_dados->execute(array(
                    "$this->nome",
                    "$this->cargo",
                    "$this->imagem",
                    "$this->status",
                    "$this->id_equipe"
                ));
                $this->setRetorno_dados($this->id_equipe);
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
                    id_equipe,
                    nome,
                    cargo,
                    CASE status
                        WHEN 1 THEN 'success'
                        WHEN 0 THEN 'danger'
                    END AS status_class,
                    CASE status
                        WHEN 1 THEN 'Ativo'
                        WHEN 0 THEN 'Inativo'
                    END AS status
                FROM
                    equipe
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
                    nome,
                    cargo,
                    imagem,
                    status
                FROM
                    equipe
                WHERE
                    id_equipe =  ?
            ");
            $edita_dados->execute(array(
                "$this->id_equipe"
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

    function getId_equipe() {
        return $this->id_equipe;
    }

    function getNome() {
        return $this->nome;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getStatus() {
        return $this->status;
    }

    function getRetorno_dados() {
        return $this->retorno_dados;
    }

    function setId_equipe($id_equipe) {
        $this->id_equipe = $id_equipe;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setRetorno_dados($retorno_dados) {
        $this->retorno_dados = $retorno_dados;
    }

}
