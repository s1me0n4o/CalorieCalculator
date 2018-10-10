$(document).ready(function(){
    $('form.ajax').submit(function(){

        // Call ajax for pass data to other place
            $.ajax({
            type: 'GET',
            url: 'validation.php',
            data: $(this).serialize() // getting filed value in serialize form
            })
                .done(function(data){ // if getting done then call.

            // show the response
                      $('#result').html(data);
                    })
                .fail(function() { // if fail then getting message

        // just in case posting your form failed
                      alert( "Posting failed." );

                     });
    // to prevent refreshing the whole page page
    return false;
    });
})