<?php 

include_once 'config.php';

$insertData = new Conn();

$list_name = $_POST['list_name'];

$list_items = $_POST['list_items'];

if (!empty($list_name) && (count($list_items) > 0)) {

  $inserTitle = $insertData->insertListName($list_name);
    
  $id = $insertData->getListId();
    
  $insertItems = $insertData->insertListItems($list_items, $id);
    
  if ($inserTitle && $insertItems) {
    
    echo 'success';
    
  } else {

    echo 'error';

  }

} else {

  echo 'Empty fields!';

}

?>