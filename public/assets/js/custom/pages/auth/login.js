const form          =       $('#kt_sign_in_form');
const submitBtn     =       document.getElementById('submitBtn');

submitBtn.addEventListener('click', function(evt) {
    evt.preventDefault();
    form.validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true
            }
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
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