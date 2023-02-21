<?php
require_once("DatabaseConfiguration.php");

$connection = new DatabaseConfiguration();

$ID = $_GET['ID'];
$connection->SetID($ID);

if (isset($_POST['Update'])) {
     $connection->SetName($_POST['Name']);
     $connection->SetNIM($_POST['NIM']);
     $connection->SetEmail($_POST['Email']);
     $connection->SetCampus($_POST['Campus']);
     $connection->SetPrograms($_POST['Programs']);

     $connection->Update();
}

$value = $connection->FetchOne()[0];
