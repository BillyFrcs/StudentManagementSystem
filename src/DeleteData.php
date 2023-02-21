<?php
require_once("DatabaseConfiguration.php");

$connect = new DatabaseConfiguration();

if (isset($_GET['ID']) && isset($_GET['request']) && $_GET['request'] == 'delete') {
     $connect->SetID($_GET['ID']);

     $connect->Delete();
}
