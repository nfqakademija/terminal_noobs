$(function () {
    // Get the modal
    var modal = document.getElementById('myModal');

// Get the button that opens the modal
    var btn = document.getElementById("");

// Get the <span> element that closes the modal

// When the user clicks the button, open the modal
    $("#myBtn").on('click', function() {
        $("#myModal").show();
    });

    $(".close").on('click', function() {
        $("#myModal").hide();
    });

    $('body').on('click', function(e) {
        if (event.target == modal) {
            $("#myModal").hide();
        }
    });
});