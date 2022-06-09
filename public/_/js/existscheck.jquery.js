$.fn.existsChecker = function() {

  return this.each(function() {

    var interval;

    $(this).on('keyup', function() {
    	
      var self = $(this),
          selfType = self.data('type'),
          selfValue,
          feedback = $('.check-exists-feedback[data-type=' + selfType + ']');

      if(interval === undefined) {
      	interval = setInterval(function() {
          
		  if(selfValue !== self.val()) {
		  	selfValue = self.val();

		  	if(selfValue.length > 2) {
		  	  $.ajax({
		  	  	url:'/subscription-check-email',
		  	  	type: 'get',
		  	  	dataType: 'json',
		  	  	data: {
		  	      type: selfType,
		  	      value: selfValue
		  	  	},
		  	  	success: function(data) {
                  if(data.exists !== undefined ) {
                  	if(data.exists === true) {
                  	  feedback.text('That email is already registered in our database. Please use another email to subscribe!');
                      $('#newsLetterBtnSubscribe').prop('disabled', true);
                  	} else {
                      feedback.text('');
                  		$('#newsLetterBtnSubscribe').prop('disabled', false);
                  	}
                  }
		  	  	},
		  	  	error: function() {
		  	  		// Something went wrong
		  	  	}
		  	  });
		  	}

		  }

      	}, 1000);
      }
    });

  });
  
};