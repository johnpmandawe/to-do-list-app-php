$(document).ready(function () {

  $('.list_items').on('click', function () {

    $('.check').each(function () {

      let value = $(this).closest('.items').find('.item_name');

      let custom = $(this).closest('.items').find('.custom');

      let item_id = $(this).closest('.items').find('.item_id').text();

      if ($(this).is(':checked')) { // IF CHECKBOX IS CHECKED, IT WILL SEND AN AJAX REQUEST TO UPDATE `checked` TABLE AS True 

        value.addClass('item_name_checked');

        custom.addClass('custom_checked');

        $.ajax({

          method: 'POST',

          url: 'php/check.php',

          data: {'item_id': item_id}

        });

      } else {  // OTHERWISE, IT WILL SEND AN AJAX REQUEST TO UPDATE `checked` TABLE AS False 

        value.removeClass('item_name_checked');
        
        custom.removeClass('custom_checked');

        $.ajax({

            method: 'POST',
  
            url: 'php/uncheck.php',
  
            data: {'item_id': item_id}
  
          });

      }

    });

  });

});