<?php

include_once 'config.php';

$delList = new Conn();

$delList->delList($_POST['list_id']);

$delList->delItem($_POST['list_id']);

?>