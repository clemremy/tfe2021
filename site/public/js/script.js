$(document).ready(function() {
    $('.modal-btn').on('click', function() {
        var id = $(this).attr('id');
        $('#myModal input[name="workshop_id"]').val(id);
        $('#myModal').css('display', 'block');
    });
    $('#myModal .close').on('click', function() {
        $('#myModal').css('display', 'none');
    });
});

$(document).ready(function() {
    var checkBoxes = $('div .checkbox');
    checkBoxes.change(function () {
        $('.submitcheck').prop('disabled', checkBoxes.filter(':checked').length < 1);
    });
    $('div .checkbox').change();
});