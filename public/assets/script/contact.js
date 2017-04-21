$(function() {

    $('#contact-form').submit(function(e){

        var data = {
            'email': $('#email').val(),
            'name': $("#lastname").val(),
            'message': $("#message").val()
        };

        $.ajax({
            url: $(this).attr('action'),
            method: "POST",
            data: JSON.stringify(data),
            contentType: "application/json",
            dataType: 'json',
            success: function(data, status, error) {
                $(".messageForm").addClass("hide");
                $(".reponseMessage").removeClass("hide");
            },
            error: function(data, status, error) {
                alert('Formulaire non valide.')
            }
        });
  //      return false;
    });
});