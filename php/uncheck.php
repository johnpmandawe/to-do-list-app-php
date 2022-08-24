<?php 

include_once 'config.php';

$uncheck = new Conn();

$unchecked = $uncheck->uncheckItem($_POST['item_id']);

?>