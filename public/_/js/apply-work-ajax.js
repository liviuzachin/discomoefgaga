var app = app || {};
(function(o){
    "use strict";
    // Private methods
    var ajax, getFormData;

    ajax = function(data) {
        var oldval = $('#sendApplication').val();
        $.ajax({
          url: "/work-with-us",
          type: "POST",
          data: data,
          processData: false,  // tell jQuery not to process the data
          contentType: false,   // tell jQuery not to set contentType
          beforeSend: function() {
            $('#sendApplication').addClass('load-color');
            $('#sendApplication').attr("disabled", "disabled").val('Sending. Please wait...');
          },
          success: function( data, status, xhttp) {
            // data will be true or false if you returned a json bool
            //console.log('data');
            console.log('successss');
            $('#applyWork').fadeOut();
            $('#popupFormSuccess').fadeIn();
            
          },
          error: function(xhr) {
            if(xhr.status === 400) {
                console.log(xhr.responseJSON.message);
                //console.log(xhr.responseJSON.validator.age[0]);
                $('#sendApplication').removeClass('load-color');
                $('#sendApplication').removeAttr('disabled').val(oldval);
                $('#popupForm').fadeIn();
                $('#popupFormContent').html('<p>'+ xhr.responseJSON.message +'</p>');
            } else {
                $('#sendApplication').removeClass('load-color');
                $('#sendApplication').removeAttr('disabled').val(oldval);
                $('#popupForm').fadeIn();
                $('#popupFormContent').html('<p>There was an error submitting your application. Please try again later or contact us directly at mail contact@discomoefgaga.com.<br> Thank you!</p>');
            }
          }
        });

    };
    getFormData = function(token, form_data, pic, cv) {
        var data = new FormData();
        data.append('_token', token);
        data.append('form_data', form_data);
        data.append('pic', pic);
        data.append('cv', cv);
        return data;
    };

    o.uploader = function(options) {
        o.options = options;
        ajax(getFormData(o.options.token, o.options.form_data, o.options.pic[0].files[0], o.options.cv[0].files[0]));
    };

}(app, jQuery));

document.getElementById('sendApplication').addEventListener('click', function(e){
    e.preventDefault();
    app.uploader({
        token : $('input[name=_token]').attr('value'),
        form_data : $('#applyWork').serialize(),
        pic : $('#uploadPic'),
        cv : $('#uploadCv')
    });

});

$('#popupFormClose').click(function(e){
    e.preventDefault();
    $('#popupForm').fadeOut();
});


