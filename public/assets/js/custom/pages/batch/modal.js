let form                =           $('#kt_batch_operations_form');
let modalHeading        =           document.getElementById('modal_heading');
let modalBody           =           document.getElementById('modal_body');

document.querySelector('body').addEventListener('click', modalEventHandler);

function modalEventHandler(evt) {
    if(evt.target.classList.contains('delete')) {
        const code = evt.target.dataset.batchCode;
        form.attr('action', `/batches/${code}`);
        modalHeading.innerHTML = 'Delete Batch';
        modalBody.innerHTML = 'Are you sure, you want to delete batch?';
    } else if(evt.target.classList.contains('unenroll')) {
        const code = evt.target.dataset.batchCode;
        form.attr('action', `/batches/${code}/unenroll`);
        modalHeading.innerHTML = 'Unenroll Batch';
        modalBody.innerHTML = 'Are you sure, you want to unenroll from this batch?';
    }
}