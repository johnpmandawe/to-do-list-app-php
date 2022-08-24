$(document).ready(function () {

  $('.lists').on('click', function () {

    // DISPLAY VIEW LIST MODAL IF EYE ICON IS CLICKED

    $('.eye').each(function () {

      $(this).click(function () {

        $('.view_list').addClass('show');

        let id = $(this).closest('div').find('.list_id').text();

        $.ajax({

          method: 'POST',

          url: 'php/view.php',

          data: {'list_id': id},

          success: function (res) {

            $('.list_items').html(res);

          }

        });

      });

    });

    // DISPLAY EDIT LIST MODAL IF EDIT ICON IS CLICKED

    $('.edit').each(function () {

      $(this).click(function () {

        $('.edit_list').addClass('show');

        let id = $(this).closest('div').find('.list_id').text();

        $.ajax({

          method: 'POST',

          url: 'php/get_items.php',

          data: {'list_id': id},

          success: function (res) {

            $('.edit_list_items').html(res);

          }

        });

      });

    });

    //DELETES LIST AND ITS ITEMS IF DELETE ICON IS CLICKED

    $('.delete').each(function () {

      $(this).click(function () {

        let id = $(this).closest('div').find('.list_id').text();

        $.ajax({

          method: 'POST',

          url: 'php/delete.php',

          data: {'list_id': id},

          success: function () {

            window.location.reload();

          }

        });

      });

    });

    // REMOVES MODAL IF EXIT BUTTON IS CLICKED

    $('.exit').each(function () {

      $(this).click(function () {

        $('.view_list').removeClass('show');

        $('.edit_list').removeClass('show');

      });

    });

  });

});