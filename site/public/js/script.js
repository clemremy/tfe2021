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
