let editModal               =           $('#kt_modal_edit_batch');
let editForm                =           $('#kt_edit_batch_form');
let editNameInput           =           document.querySelector('input#name');
let editDescriptionInput    =           document.querySelector('input#description');
let editFormBtn             =           document.querySelector('#editFormBtn');

document.querySelectorAll('.edit').forEach(button => {
    button.addEventListener('click', editEventHandler);
});

function editEventHandler(evt) {
    const batchCode = evt.target.dataset.batchCode;
    http.get(`/batches/${batchCode}/edit`)
    .then(res => {
        setEditFormData(res);
        showEditModal();
    })
    .catch(err => console.error(err));
}

function setEditFormData(data) {
    removeEditFormValidationErrors();
    editForm.attr('action', `/batches/${data.code}`);
    editNameInput.value = data.name;
    editDescriptionInput.value = data.description;
}

function removeEditFormValidationErrors() {
    document.querySelectorAll('div.server_error').forEach(element => {
        element.innerHTML = '';
    });
    document.querySelectorAll('div.error').forEach(element => {
        element.remove();
    })
}

function showEditModal() {
    editModal.modal('show');
}

function hideEditModal() {
    editModal.modal('hide');
}

function removeServerError(element) {
    if(element.siblings('div.server_error')) {
        element.siblings('div.server_error').remove();
    }
}

editFormBtn.addEventListener('click', function(evt) {
    evt.preventDefault();
    editForm.validate({
        rules: {
            name: {
                required: true,
            },
            description: {
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
    if(editForm.valid() == true) {
        editForm.submit();
    }
});