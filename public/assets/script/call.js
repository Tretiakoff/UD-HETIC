$(function() {

    $('#call-form').submit(function(e){

        var data = {
            'number': $('#number').val(),
            'interval': $("#interval").val()
        };

        if($('#number').val().length < 10) {
            alert('Veuillez entrer un numéro valide.');
             return false;
        }
        if($('#number').val().length > 12) {
            alert('Veuillez entrer un numéro valide.');
            return false;
        }

        $.ajax({
            url: $(this).attr('action'),
            method: "POST",
            data: JSON.stringify(data),
            contentType: "application/json",
            dataType: 'json',
            success: function(data, status, error) {
                console.log('success');
                $(".telephoneForm").addClass("hide");
                $(".reponseTel").removeClass("hide");
            },
            error: function(data, status, error) {
                alert('Veuillez entrer un numéro valide.')
            }
        });
        return false;
    });
});