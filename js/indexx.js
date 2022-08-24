$(document).ready(function () {

  // DISPLAY ALL LIST

  $.ajax({
  
    method: 'GET',
  
    url: 'php/display_list.php',
  
    dataType: 'html',
  
    success: function (response) {
  
      $('.lists').html(response);
  
    }
  
  });

  // DISPLAY CREATE LIST MODAL IF CREATE BUTTON IS CLICKED

  $('.create_btn').click(function () {

    $('.create_list').addClass('show');

  });

  // ADD INPUT ELEMENT IF ADD ICON IS CLICKED

  $('.add').click(function () {

    let input_el = '<input type="text" placeholder="List item..." class="input_field itemss"/>';

    $('.parent').append(input_el);

  });
  
  // REMOVES MODAL IF EXIT BUTTON IS CLICKED

  $('.exit').each(function () {

    $(this).click(function () {

      $('.create_list').removeClass('show');

    });

  });

});