<?php
include('../repository/musicasRepository.php');
include('../utils/utils.class.php');
$musicasRepository = new MusicasRepository();
$utils = new Utils();
$coluna = $utils->getQueryString('coluna');
$valor = $utils->getQueryString('valor');
$sql = $musicasRepository->filterBy($coluna,$valor);
$obj = $utils->toObject($sql);
?>
<div class="wrapper">
    <form method="GET">
        <label for="coluna">Selecione por qual coluna deseja filtrar:</label>
        <select name="coluna" id="coluna">
            <option value="id">ID</option>
            <option value="nome">Nome</option>
            <option value="duracao">Duracao</option>
            <option value="generos_id">Generos ID</option>
        </select>
        <label for="valor">Digite o valor que deseja filtrar:</label>
        <input type="text" name="valor" id="valor">
        <button type="submit">Filtrar</button>

    </form>
</div>
<?php
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

<style>
    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 50%;
    }
</style>