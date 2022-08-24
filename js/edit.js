$(document).ready(function () {

  $('.edit_list_form').submit(function (e) {

    e.preventDefault();

  });

  // ADD INPUT ELEMENT IF ADD ICON IS CLICKED

  $('.add_edit').click(function () {

    let input_el = '<input type="text" placeholder="New item..." class="input_field new_item"/>';

    $('.edit_parent').append(input_el);

  });

  // IF BUTTON IS CLICKED, IT WILL SEND AN AJAX REQUEST TO UPDATE LIST ITEMS 

  $('.edit_btn').click(function () {
    
    let parent = $('.edit_parent').children().length;

    let edit_parent = $('.edit_parent');

    if (parent == 0) {
  
      let id_arr = [];
      
      let name_arr = [];

      $('.item').each(function () {

        let item_id = $(this).find('.edit_item_id');

        let item_name = $(this).find('.edit_item');

        item_id.each(function () {

          id_arr.push($(this).text());

        });

        
        item_name.each(function () {

            name_arr.push($(this).val());
  
        });

      });

      $.ajax({

        method: 'POST',

        url: 'php/edit.php',

        data: {

          'id_arr': id_arr,

          'name_arr': name_arr

        },

        success: function () {

          window.location.reload();

        }

      });

    } else {

        let new_items = [];
    
        let list_id = [];
        
        let id_arr = [];
      
        let name_arr = [];

        let child = edit_parent.find('.new_item');

        child.each(function () {

          let value = $(this).val();

          if (value != "") {

            new_items.push(value);

          }

        });
  
        $('.item').each(function () {
  
          let item_id = $(this).find('.edit_item_id');
  
          let item_name = $(this).find('.edit_item');

          let id = $(this).find('.edit_list_id');

          id.each(function () {

            list_id.push($(this).text());

          });
  
          item_id.each(function () {
  
            id_arr.push($(this).text());
  
          });
  
          item_name.each(function () {
  
              name_arr.push($(this).val());
    
          });
  
        });

        $.ajax({

          method: 'POST',
    
          url: 'php/edit_add.php',

          data: {

            'id_arr': id_arr,
  
            'name_arr': name_arr,

            'new_items': new_items,

            'list_id': list_id
  
          },
    
          success: function () {
    
            window.location.reload();
    
          }
    
        });

    }

  });

});