$(document).ready(function() {
    $('#sign_in_button_div').on('click', function() {
        $.ajax({
            url: "test_conn.php",
            method: "POST",
            //data: {email: $('#email').val(), id: $('#id_user').val()}
          })
          /* .done(function() {
            alert("success");
          })
          .fail(function() {
            alert("error");
          })
          .always(function() {
            alert("complete");
          }); */
    });
});