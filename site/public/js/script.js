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

// Change nav color
$(function() {
    switch (window.location.pathname) {
        case '/mobilier-accueil':
            $('.navbar').addClass('white');
            break;
        case '/':
            $('.navbar').addClass('white');
            break;
        default: 
            // code block
}
});

$(function() {
    switch (window.location.pathname) {
        case '/mobilier-accueil':
            $('.burger').addClass('white');
            break;
        case '/':
            $('.burger').addClass('white');
            break;
        default: 
            // code block
}
});