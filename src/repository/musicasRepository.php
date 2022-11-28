<?php 
include('../database/database.class.php');
class MusicasRepository {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getMusicas($page = 1) {
        $musicas_per_page = 3;
        $limit = ($page - 1) * $musicas_per_page;
        $sql = $this->db->getRows("SELECT * FROM musicas LIMIT $limit, $musicas_per_page");
        return $sql;
    }

    public function getMusica($id) {
        $sql = $this->db->getRow("SELECT * FROM musicas WHERE id = ?", [$id]);
        return $sql;
    }

    public function createMusica($nome, $duracao, $generos_id, $lancamento, $created, $modified, $artistas_id) {
        $sql = $this->db->save("INSERT INTO musicas (nome, duracao, generos_id, lancamento,created,modified,artistas_id) VALUES (?, ?, ?, ?, ?, ?, ?)", [$nome, $duracao, $generos_id, $lancamento , $created, $modified, $artistas_id]);
        return $sql;
    }

    public function updateMusica($id, $nome, $duracao, $generos_id, $lancamento, $created, $modified, $artistas_id) {
        $sql = $this->db->execute("UPDATE musicas SET nome = ?, duracao = ?, generos_id = ?, lancamento = ?, created = ?, modified = ?, artistas_id = ?,   WHERE id = ?", [$nome, $duracao, $generos_id, $lancamento,  $id]);
        return $sql;
    }

    public function deleteMusica($id) {
        $sql = $this->db->execute("DELETE FROM musicas WHERE id = ?", [$id]);
        return $sql;
    }

    public function filterBy($col, $filter) {
        switch($col) {
            case 'id':
                $sql = $this->db->getRows("SELECT * FROM musicas WHERE id LIKE CONCAT('%',?,'%')", [$filter]);
                break;
            case 'nome':
                $sql = $this->db->getRows("SELECT * FROM musicas WHERE nome LIKE CONCAT('%',?,'%')", [$filter]);
                break;
            case 'duracao':
                $sql = $this->db->getRows("SELECT * FROM musicas WHERE duracao LIKE CONCAT('%',?,'%')", [$filter]);
                break;
            case 'generos_id':
                $sql = $this->db->getRows("SELECT * FROM musicas WHERE generos_id LIKE CONCAT('%',?,'%')", [$filter]);
                break;
            case 'lancamento':
                $sql = $this->db->getRows("SELECT * FROM musicas WHERE lancamento LIKE CONCAT('%',?,'%')", [$filter]);
                break;
            case 'created':
                $sql = $this->db->getRows("SELECT * FROM musicas WHERE created LIKE CONCAT('%',?,'%')", [$filter]);
                break;
            case 'modified':
                $sql = $this->db->getRows("SELECT * FROM musicas WHERE modified LIKE CONCAT('%',?,'%')", [$filter]);
                break;
            case 'artistas_id':
                $sql = $this->db->getRows("SELECT * FROM musicas WHERE artistas_id LIKE CONCAT('%',?,'%')", [$filter]);
                break;
            default:
                $sql = $this->db->getRows("SELECT * FROM musicas");
                break;
        }
        return $sql;
    }

}

?>