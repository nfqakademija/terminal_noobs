
$(function () {
    /*marks for team*/

    $(document).on('keyup', '.js-team-grade', function(e) {
        var input = $(".js-team-" + $(this).data('team-name'));
        input.val($(this).val());
        input.trigger('change');
    });

    $('input[name="no1"]').keypress(function() {
        if (this.value.length >= 2) {
            return false;
        }
    });
});