
$(function () {
    /*marks for team*/

    $(document).on('keyup', '.js-team-grade', function(e) {
        $(".js-team-" + $(this).data('team-name')).val($(this).val());
    });

    /*save input*/
    /*
    var timeoutId;
    $('#the-textarea').on('input propertychange change', function() {
        console.log('Textarea Change');

        clearTimeout(timeoutId);
        timeoutId = setTimeout(function() {
            // Runs 1 second (1000 ms) after the last change
            saveToDB();
        }, 1000);
    });

    function saveToDB()
    {
        console.log('Saving to the db');
    }

    // This is just so we don't go anywhere
    // and still save if you submit the form
    $('.contact-form').submit(function(e) {
        saveToDB();
        e.preventDefault();
    });
    */
});