$(document).ready(function(){
  	$(".dropdown-trigger").dropdown();
  });


/*$(document).ready(function(){
                $('#my-form').on('submit', function(e){
                    //Stop the form from submitting itself to the server.
                    e.preventDefault();
                    var email = $('#email').val();
                    var vardas = $('#first_name').val();
                    var pavarde = $('#last_name').val();
                    var atsiliepimas = $('#textarea1').val();
                    $.ajax({
                        type: "POST",
                        url: 'reviews.php',
                        data: {email: email,
                        	vardas: first_name, pavarde: last_name, atsiliepimas: textarea1},
                        success: function(data){
                            alert("Review Submited");
                            console.log(data);
                        }
                    });
                });
            });
*/