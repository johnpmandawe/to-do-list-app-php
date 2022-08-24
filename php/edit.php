<?php

include_once 'config.php';

$updateItems = new Conn();

$id_arr = $_POST['id_arr'];

$name_arr = $_POST['name_arr'];

$combined = array_combine($id_arr, $name_arr);

foreach ($combined as $key => $value) {

  if ($value == "") {

    $delItem = $updateItems->delItems($key);

  } else {
    
    $updateItem = $updateItems->updateItems($key, $value);
    
  }


}

?>