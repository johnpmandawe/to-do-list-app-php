<?php

include_once 'config.php';

$getItems = new Conn();

$list_id = $_POST['list_id'];

$items = $getItems->getItems($list_id);

$output = '';

foreach ($items as $item) {

  if ($item['checked'] == 0) {

    $output .= '<div class="items flex">

                  <p class="item_id" style="display: none;">'. $item['item_id'] .'</p>

                  <input type="checkbox" class="check">

                  <p class="item_name">'. $item['item_name'] .'</p>

                  <div class="custom"></div>

                </div>';

  } else {

  $output .= '<div class="items flex">

                <p class="item_id" style="display: none;">'. $item['item_id'] .'</p>

                <input type="checkbox" class="check" checked>

                <p class="item_name item_name_checked">'. $item['item_name'] .'</p>

                <div class="custom custom_checked"></div>

              </div>';

  }

}

echo $output;

?>