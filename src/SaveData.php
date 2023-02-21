<?php
if (isset($_POST['Save'])) {
     require_once("DatabaseConfiguration.php");

     $connection = new DatabaseConfiguration();

     $connection->SetName($_POST['Name']);
     $connection->SetNIM($_POST['NIM']);
     $connection->SetEmail($_POST['Email']);
     $connection->SetCampus($_POST['Campus']);
     $connection->SetPrograms($_POST['Programs']);

     $connection->Save();
}
