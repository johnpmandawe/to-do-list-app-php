<?php 

include_once 'config.php';

$updateItems = new Conn();

$list_id = $_POST['list_id'];

$id_arr = $_POST['id_arr'];

$name_arr = $_POST['name_arr'];

$new_items = $_POST['new_items'];

$single_list_id = 0;

$combined = array_combine($id_arr, $name_arr);

foreach ($list_id as $id) {

  $single_list_id =  $id;

  break;

}

foreach ($combined as $key => $value) {

  if ($value == "") {
  
    $delItem = $updateItems->delItems($key);
  
  } else {
      
    $updateItem = $updateItems->updateItems($key, $value);
      
  }
  
  
}

$updateItems->insertListItems($new_items, $single_list_id);

?>