<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style/style.css">

  <title>Index</title>

</head>

<body>

  <div class="wrapper">

    <div class="title_button flex">

      <p class="title">To-do-list App</p>

      <p class="create_btn">Create List</p>
      
    </div>

    <div class="lists flex">

    </div>

    <!-- CREATE LIST MODAL -->

    <div class="modal create_list">

      <div class="modal_content">

        <p class="modal_title">CREATE LIST</p>

        <span class="exit">&times;</span>

        <form action="#" method="POST" class="create_form">

          <p class="list_label">List Name:</p>

          <input type="text" placeholder="List name..." class="input_field name"/>

          <div class="parent">

            <p class="item_label">List Items:</p>

            <input type="text" placeholder="List item..." class="input_field itemss"/>

            <input type="text" placeholder="List item..." class="input_field itemss"/>

            <input type="text" placeholder="List item..." class="input_field itemss"/>

          </div>

          <img src="icons/add.png" class="icon add" alt="">

          <input type="submit" value="Save List" class="save_btn"/>

        </form>

      </div>

    </div>

    <!-- VIEW LIST MODAL -->

    <div class="modal view_list">

      <div class="modal_content">

        <p class="modal_title">VIEW ITEMS</p>

        <span class="exit">&times;</span>

        <div class="list_items">

        </div>

      </div>

    </div>

    <!-- EDIT LIST MODAL -->

    <div class="modal edit_list">

      <div class="modal_content">

        <p class="modal_title">EDIT ITEMS</p>

        <span class="exit">&times;</span>

        <form action="#" method="POST" class="edit_list_form">

          <div class="edit_list_items">

          </div>

          <div class="edit_parent">

          </div>

          <img src="icons/add.png" class="icon add_edit" alt="">

          <input type="submit" value="Save List" class="edit_btn"/>

        </form>

      </div>

    </div>

  </div>

  <script src="js/jquery-3.6.0.min.js"></script>

  <script src="js/indexx.js"></script>

  <script src="js/modals.js"></script>

  <script src="js/create.js"></script>

  <script src="js/check_uncheck.js"></script>

  <script src="js/edit.js"></script>
    
</body>

</html>