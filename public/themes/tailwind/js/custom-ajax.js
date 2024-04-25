$(document).ready(function() {
    //Submit activate connections
    $('body').on('click', '.check-status', function() {
        // Get the is_active value from the data attribute
        var status = $(this).data('is-active');
        var id = $(this).data('id');

        // Send AJAX request
        $.ajax({
            url: base_url+'/admin/change-connection-status',
            method: 'POST',
            data: {
                status: status,
                id: id,
            },
            beforeSend: function() {
                $('.check-status').prop('disabled', true);
            },
            success: function(response) {
                // Handle success response
                $('#response-message').html(response);
                $('.check-status').prop('disabled', false);
            }
        });
    });
});