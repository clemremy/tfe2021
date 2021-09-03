//modal de réservation/inscription
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
    $('.modal-btn').on('click', function() {
        var id = $(this).attr('id');
        $('#myModal input[name="item_id"]').val(id);
        $('#myModal').css('display', 'block');
    });
    $('#myModal .close').on('click', function() {
        $('#myModal').css('display', 'none');
    });
});

//checkbox non cochée = bouton submit incliquable
$(document).ready(function() {
    var checkBoxes = $('div .checkbox');
    checkBoxes.change(function () {
        $('.submitcheck').prop('disabled', checkBoxes.filter(':checked').length < 1);
    });
    $('div .checkbox').change();
});

//honeypot
$('form').submit(function(){    
    if ($('input#honeypot').val().length != 0) {
        return false;
    } 
});