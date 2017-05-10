// Ajout image

function showForm(id, route){
    console.log('je passe');
  $.ajax({
      type: 'POST',
      url: route,
      data: {},
      datatype: 'json',
      beforeSend: function() {
      $('.modal-body').html("<div align='center'><i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i><br><h3> Chargement</h3></div>");
      },
      success: function(result) {
        $('.modal-body').html(result);s
      },

      error: function(jqXHR, exception) {

      },
  });

}

function initAjaxForm()
{
    $('body').on('submit', '.ajaxForm', function (e) {

        e.preventDefault();

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize()
        })
        .done(function (data) {
            if (typeof data.message !== 'undefined') {
                alert(data.message);
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (typeof jqXHR.responseJSON !== 'undefined') {
                if (jqXHR.responseJSON.hasOwnProperty('form')) {
                    $('#form_body').html(jqXHR.responseJSON.form);
                }

                $('.form_error').html(jqXHR.responseJSON.message);

            } else {
                alert(errorThrown);
            }

        });
    });
}
