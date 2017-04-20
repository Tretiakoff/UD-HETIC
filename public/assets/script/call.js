$(function () {
    console.log('coucou');
    $('#call').click(function(e){
        console.log($('#number').val());
        aler('coucou');
        if ($('#number').val().length > 8) {
            alert('Veuillez entrer un numéro valide.')
        }
        if ($('#number').length < 8) {
            alert('Veuillez entrer un numéro valide.')
        }
        $.ajax({
            url : $(this).attr('action'),
            method: "POST",
            contentType: "application/json",
            dataType: 'json',
            success: function(data, status, error) {
                console.log('OK');
            },
            error: function(data, status, error) {
                console.log('NOT OK');
                console.log(data);
            }
        });
        return false;
    });
});