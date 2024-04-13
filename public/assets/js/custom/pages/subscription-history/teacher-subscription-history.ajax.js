const initAjaxRoute = function(route, csrfToken) {
    var dt;

    var initDatatable = function () {
        dt = $("#kt_datatable_column_rendering").DataTable({
            searchDelay: 500,
            processing: false,
            serverSide: true,
            order: [[5, 'desc']],
            stateSave: true,
            ajax: {
                url: route,
                type: "POST",
                data: function(d) {
                    d._token = csrfToken;
                },
                beforeSend: function() {
                    KTApp.showPageLoading();
                },
                complete: function() {
                    KTApp.hidePageLoading();
                },
            },
            columns: [
                {data: 'pivot.id', name: 'pivot.id'},
                {data: 'metadata.name', name: 'metadata.name'},
                {data: 'batch_size', name: 'batch_size'},
                {data: 'pivot.start_date', name: 'pivot.start_date'},
                {data: 'pivot.end_date', name: 'pivot.end_date'},
                {data: 'price', name: 'price'},
                {data: 'pivot.payment.paid_amount', name: 'pivot.payment.paid_amount'},
            ],
        });
    }

    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            dt.search(e.target.value).draw();
        });
    }


    initDatatable();
    handleSearchDatatable();
};
