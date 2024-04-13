let form            =           $('#kt_password_reset_form');
let emailBtn        =           document.getElementById('emailBtn');

emailBtn.addEventListener('click', function(evt) {
    evt.preventDefault();
    form.validate({
        rules: {
            email: {
                required: true,
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