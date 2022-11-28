<?php 
include('../repository/musicasRepository.php');
include('../utils/utils.class.php');
header('Content-Type: application/json');
$musicasRepository = new MusicasRepository();
$utils = new Utils();

$page = $utils->getQueryString('page');
$sql = $musicasRepository->getMusicas($page);
$obj = $utils->toObject($sql);
echo $sql;

?>