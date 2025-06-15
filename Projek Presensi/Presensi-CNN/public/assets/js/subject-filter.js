$(document).ready(function() {
    function filterSubjects() {
        var major_id = $('#major_filter').val();
        var class_id = $('#class_filter').val();

        $.ajax({
            url: '/filter-subjects',
            type: 'GET',
            data: {
                major_id: major_id,
                class_id: class_id
            },
            success: function(response) {
                $('#subject-table-body').html(response);
            }
        });
    }

    $('#major_filter, #class_filter').change(function() {
        filterSubjects();
    });
});

