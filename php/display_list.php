<?php 

include_once 'config.php';

$display = new Conn();

$getAllLists = $display->getAllLists();

foreach ($getAllLists as $row) {
  
  ?>

    <div class="list">

      <p class="list_name"><?php echo $row['name']; ?></p>

      <div class="ops flex">

        <p class="list_id" style="display:none;"><?php echo $row['list_id']; ?></p>

        <img src="icons/eye.png" class="icon eye" alt="">

        <img src="icons/edit.png" class="icon edit" alt="">

        <img src="icons/delete.png" class="icon delete" alt="">

      </div>

    </div>

  <?php

}

?>