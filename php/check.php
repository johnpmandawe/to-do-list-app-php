<?php 

include_once 'config.php';

$check = new Conn();

$checked = $check->checkItem($_POST['item_id']);

?>