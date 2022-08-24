$(document).ready(function () {

  //PREVENTING FORM TO SUBMIT

  $('.create_form').submit(function (e) {

    e.preventDefault();

  });


  //SENDING FORM DATA TO create.php THRU AJAX


  $('.save_btn').click(function () {

    let items = [];

    $('.itemss').each(function () {

      let value = $(this).val();

      if (value != "") {

        items.push(value);

      }

    });

    let formData = {

      list_name: $('.name').val(),

      list_items: items

    };

    $.ajax({

      method: 'POST',

      url: 'php/create.php',

      data: formData,

      dataType: 'text',

      success: function () {

        $('.create_form').trigger('reset');

        window.location.reload();

      }

    });

  });

});