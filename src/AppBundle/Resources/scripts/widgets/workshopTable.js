
$(function () {
    /*marks for team*/

    $(document).on('keyup', '.js-team-grade', function(e) {
        $(".js-team-" + $(this).data('team-name')).val($(this).val());
    });

    $('input[name="no1"]').keypress(function() {
        if (this.value.length >= 2) {
            return false;
        }
    });
});