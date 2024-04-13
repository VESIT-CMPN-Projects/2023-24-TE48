const step1Nav          =       document.getElementById('step1Nav');
const step2Nav          =       document.getElementById('step2Nav');
const step3Nav          =       document.getElementById('step3Nav');

const step1Content      =       document.getElementById('step1Content');
const step2Content      =       document.getElementById('step2Content');
const step3Content      =       document.getElementById('step3Content');

const step1Prev         =       document.getElementById('step1Prev');
const step2Prev         =       document.getElementById('step2Prev');
const step3Prev         =       document.getElementById('step3Prev');

const step1Next         =       document.getElementById('step1Next');
const step2Next         =       document.getElementById('step2Next');
const submitBtn         =       document.getElementById('submitBtn');

let stepperForm         =       $('#kt_sign_up_form');

function removeServerError(element) {
    console.log(element.siblings('div.server_error'));
    if(element.siblings('div.server_error')) {
        element.siblings('div.server_error').remove();
    }
}

step1Next.addEventListener('click', function(evt) {
    evt.preventDefault();
    stepperForm.validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 255,
            },
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            password_confirmation: {
                required: true,
                equalTo: '.password'
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
    if(stepperForm.valid() == true) {
        removeCurrent(step1Nav, step1Content);
        addCurrent(step2Nav, step2Content);
    }
});

step2Prev.addEventListener('click', function(evt) {
    removeCurrent(step2Nav, step2Content);
    addCurrent(step1Nav, step1Content);
});

step2Next.addEventListener('click', function(evt) {
    evt.preventDefault();
    stepperForm.validate({
        rules: {
            country: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
            dob: {
                required: true,
            }
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
    if(stepperForm.valid() == true) {
        removeCurrent(step2Nav, step2Content);
        addCurrent(step3Nav, step3Content);
    }
});

step3Prev.addEventListener('click', function(evt) {
    removeCurrent(step3Nav, step3Content);
    addCurrent(step2Nav, step2Content);
});

submitBtn.addEventListener('click', function(evt) {
    evt.preventDefault();
    const courseRequired = ! document.getElementById('course').disabled;
    stepperForm.validate({
        rules: {
            board: {
                required: true,
            },
            medium: {
                required: true,
            },
            standard: {
                required: true,
            },
            course: {
                required: courseRequired,
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
    stepperForm.submit();
});

function removeCurrent(navElement, contentElement) {
    navElement.classList.remove('current');
    contentElement.classList.remove('current');
}

function addCurrent(navElement, contentElement) {
    navElement.classList.add('current');
    contentElement.classList.add('current');
}