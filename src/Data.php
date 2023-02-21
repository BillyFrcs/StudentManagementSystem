<?php
require_once('DatabaseConfiguration.php');

$connection = new DatabaseConfiguration();

$fetchData = $connection->FetchAll();

if (isset($_POST['Search'])) {
    $keyword = $_POST['Keyword'];

    $fetchData = $connection->Search($keyword);
}

// Action's path
$AddData = 'AddData.php';
$UpdateData = 'UpdateData.php';
$DeleteData = 'DeleteData.php';
$Index = 'index.php';
?>