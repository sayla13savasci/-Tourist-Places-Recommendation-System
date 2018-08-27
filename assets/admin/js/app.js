

$('#create-new').on('click', function(){
	$('#create-form').slideToggle('slow');
});


$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

$('.datatable').DataTable();

$("#image-input").on('change', function(event) {
    var file = event.target.files[0];

    if(!file.type.match('image/jpeg')
        && !file.type.match('image/jpg')
        && !file.type.match('image/png')) {
        $('#image').hide('slow');
        $(this).addClass('error');
        $(this).val('');    //the tricky part is to "empty" the input file here I reset the form.
        $('#image-error').removeClass('hidden');        
    } else {
        if (event.target.files && event.target.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .show('slow');
                $('#edit-image')
                    .attr('src', e.target.result)
                    .show('slow');

                if($('#image').hasClass('hidden')) {
                    $('#image').removeClass('hidden');
                }
            };

            reader.readAsDataURL(event.target.files[0]);
        }
    }
});

$('#image-input').on('focus', function(event) {
    if($(this).hasClass('error')){
        $(this).removeClass('error');
        $('#image-error').addClass('hidden');
    }
});

function CopyToClipboard(text) {
    new Clipboard(text);
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'bottom',
        html: true
    }); 
});

function adminAccountOpen(){
    if($('.log-in').hasClass("open")){
        $('.log-in').removeClass("open");
    }else{
        $('.log-in').addClass("open");
    }
}