$(function () {

    $('#emp_table').DataTable({
        "paging": true,
        dom: 'Bfrtip',
        buttons: [
            'print', 'copy', 'excel', 'pdf'
            , {
                extend: 'colvis',
                postfixButtons: ['colvisRestore'],

            }
        ]
    });

    $("#start_date").datepicker({
        dateFormat: "yy-mm-dd"
    });

    $("#end_date").datepicker({
        dateFormat: "yy-mm-dd"
    });

    $("#date").datepicker({
        dateFormat: "yy-mm-dd",
    });

    $("#date_select").datepicker({
        dateFormat: "yy-mm-dd"
    });

    var table = $('#etable').DataTable({
        scrollY: "800px",
        scrollX: true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: {
            leftColumns: 2
        },
        dom: 'Bfrtip',
        buttons: [
            'print', 'copy', 'excel', 'pdf'
            , {
                extend: 'colvis',
                postfixButtons: ['colvisRestore'],

            }
        ]
    });

    var table = $('#demand_met_by_location').DataTable({
        scrollY: "800px",
        scrollX: true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: {
            leftColumns: 2,
            rightColumns: 1
        },
        dom: 'Bfrtip',
        buttons: [
            'print', 'copy', 'excel', 'pdf'
            , {
                extend: 'colvis',
                postfixButtons: ['colvisRestore'],

            }
        ]
    });

    $('a.toggle-vis').on('click', function (e) {
        e.preventDefault();

        // Get the column API object
        var column = table.column($(this).attr('data-column'));

        // Toggle the visibility
        column.visible(!column.visible());
    });



});

function activeTab(tab) {
    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
};

var delete_message = 'Are You Sure to Delete this Record?';

function delete_user(id) {

    if (confirm(delete_message)) {
        window.location.href = base_url + 'index.php/user/delete/' + id;
    }
}


function show_arrest() {

    $("#arrestModal").modal('show');
}

function show_assesment() {

    $("#assesmentModel").modal('show');
}

function show_detention() {

    $("#detentionModal").modal('show');
}

function show_release() {

    $("#releaseModal").modal('show');
}




function delete_setting(id) {

    if (confirm(delete_message)) {
        window.location.href = base_url + 'index.php/setting/delete/' + id;
    }
}

function delete_distance(id) {

    if (confirm(delete_message)) {
        window.location.href = base_url + 'index.php/distance/delete/' + id;
    }
}

function delete_demand_location(id) {

    if (confirm(delete_message)) {
        window.location.href = base_url + 'index.php/demand_location/delete/' + id;
    }
}

function delete_preference(id) {

    if (confirm(delete_message)) {
        window.location.href = base_url + 'index.php/graduate/delete_preference/' + id;
    }
}

function logout() {
    var msg = 'Are you sure you want to logout of the system ?';
    if (confirm(msg)) {
        window.location.href = base_url + 'index.php/login/logout';
    }
}

function configure_system() {
    window.location.href = base_url + 'index.php/setting/configure_system';
}

function change_password() {
    window.location.href = base_url + 'index.php/user/change_password';
}

function run_glpk_csv() {
    document.getElementById('processing_div').style.display = 'block'
}





