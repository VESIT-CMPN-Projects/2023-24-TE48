let submitBtn       =       document.getElementById('submitBtn');

let form            =       $('#create_batch');

function removeServerError(element) {
    console.log(element.siblings('div.server_error'));
    if(element.siblings('div.server_error')) {
        element.siblings('div.server_error').remove();
    }
}

submitBtn.addEventListener('click', function(evt) {
    evt.preventDefault();
    form.validate({
        rules: {
            name: {
                required: true,
            },
            description: {
                required: true,
            },
            board: {
                required: true,
            },
            medium: {
                required: true,
            },
            standard: {
                required: true,
            },
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            removeServerError(element);
            if(placement) {
                $(placement).append(error);
            } else {
                error.insertAfter(element);
            }
        }
    });
    if(form.valid() == true) {
        form.submit();
    }
});