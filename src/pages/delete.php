<?php 
include('../repository/musicasRepository.php');
include('../utils/utils.class.php');

$id = $_POST['id'] ?? False;
$musicasRepository = new MusicasRepository();
$utils = new Utils();
if($id){
    $sql = $musicasRepository->deleteMusica($id);
    echo "Musica deletada com sucesso!";
}
?>
<div class="container">
    <div class="row">
        <a href="../../../index.php"><h1>Users - Delete</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" method="POST">
                <label>Do you really want to remove the user <?=$_GET['id']?> ?</label>
                <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>

                <button class="btn btn-success text-white" type="submit">Yes</button>
            </form>
        </div>
    </div>
</div>