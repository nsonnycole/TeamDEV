$(document).ready(function(){
   $( "#newMessage" ).click(function() {

        $("#myModalLabel").text("Nouveau message");
        $.ajax({
            type: "GET",
            url: Routing.generate( 'newMessage',1),
            beforeSend: function(xhr){
                $("#form-body").html("<div class='chargement' align='center'><i class='fa fa-refresh fa-spin fa-3x fa-fw'></i><br>Chargement en cours...</div>");
            },
            success: function(form) {
                $("#form-body").html(form);
            },
            error: function(response) {
            }
        });
    });
    $( "#message_save" ).click(function(event) {
        event.preventDefault(event);
        msgCreateSave();
    });

    });


    function msgCreateSave(){
        $.ajax({
            type: "POST",
            url: Routing.generate( 'newMessage',1),
            data: $("#form_person_email").serialize(),
            beforeSend: function(xhr){
                $("#message_save").text("En cours...");
                $("#message_save").attr('disabled', '');
            },
            success: function(response) {
             $('#myModal').modal('hide');

            },
            error: function(response) {
                $("#form-error").show();
                $("#form-error").html(response.responseText);
            },
            complete: function(xhr){
                $("#message_save").html("Créer");
                $("#message_save").removeAttr('disabled');
            }
        });
    }
