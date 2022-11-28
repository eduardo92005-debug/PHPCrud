<?php 
include('../repository/musicasRepository.php');
include('../utils/utils.class.php');

$musicasRepository = new MusicasRepository();
$utils = new Utils();

$page = $utils->getQueryString('page') ?: 1;
$sql = $musicasRepository->getMusicas($page);
$obj = $utils->toObject($sql);
foreach($obj as $key => $value){
    echo "
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Duracao</th>
                <th>Genero</th>
                <th>Lancamento</th>
            </tr>
            <tr>
                <td>{$value->id}</td>
                <td>{$value->nome}</td>
                <td>{$value->duracao}</td>
                <td>{$value->generos_id}</td>
                <td>{$value->lancamento}</td>
            </tr>
        </table>
    ";
}
?>
