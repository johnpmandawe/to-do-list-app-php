<?php 

include_once 'config.php';

$getItems = new Conn();

$getItems = $getItems->getItems($_POST['list_id']);

$output = '';

foreach ($getItems as $row) {

  $output .= '<div class="item">

                <p class="edit_item_id" style="display:none;">'. $row['item_id'] .'</p>

                <p class="edit_list_id" style="display:none;">'. $row['list_id'] .'</p>

                <input type="text" class="edit_item input_field" value="'. $row['item_name'] .'"/>

              </div>';

}

echo $output;

?>