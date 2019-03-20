$(document).ready(function(){
  	$(".dropdown-trigger").dropdown();
  	$(".dropdown-trigger").dropdown();
    $('.materialboxed').materialbox();
    $('.carousel').carousel();
    $('#demo-carousel').carousel();
    $('.parallax').parallax();
    $('.carousel.carousel-slider').carousel({
    fullWidth: true
});
});


$(document).ready(function(){
                $('#my-form').on('submit', function(e){
                    //Stop the form from submitting itself to the server.
                    e.preventDefault();
                    var email = $('#email').val();
                    var vardas = $('#first_name').val();
                    var pavarde = $('#last_name').val();
                    var atsiliepimas = $('#atsiliepimas').val();

                    if (email == '' || vardas == '' || pavarde == '' || atsiliepimas == '')
                    {

                    	console.log("All fields required");
                    	// $('#error_message').html("All Fields are required");
                    }
                    else
                    	{
                    		//$('#error_message').html('');
                    		console.log("Bandysim siusti");
                    		$.ajax ({
                    			url: 'reviews.php',
                    			method: "POST",
                    			data: {email: email,
                        	first_name: vardas, last_name: pavarde, atsiliepimas: atsiliepimas},
                        	success: function(data){
                        		if(data == 'success')
                        		{
                        			alert('Your review was submitted');
                        		}
                        		else if (data == 'failed')
                        		{
                        			alert('Something went wrong');
                        		}
                        		else if (data == 'duplicate') 
                        		{
                        			alert('Your review has already been submitted')
                        		}
                        	}
                    		});
                    		$("#my-form")[0].reset();
                    	};
                    });
            });
