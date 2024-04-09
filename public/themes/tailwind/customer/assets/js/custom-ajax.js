//employee bank account details
$(document).ready(function () {
    //Submit ebay connection
    $('#submit_ebay_connetion').validate({
        rules: {
            ebay_user_name: {
                required: true,
            },
            ebay_user_marketplace: {
                required: true,
            }
        },
        messages: { },
        submitHandler: function (form, e) {
            e.preventDefault();

            var formData = $(form).serialize();
          
            //Ajax employee submit form
            $.ajax({
                type: 'POST',
                url: base_url + '/customer/submit-ebay-connection',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $('.disable-submit').prop('disabled', true);
                },
                success: function (response) {
                    $('.submit_ebay_connetion_res').html(response);
                }
            });
        }
    });

    //Delete attchements
    $('body').on('change', '.ebay_checkbox', function() {
        //check ebay checkbox
        if(this.checked) {
            $(".is_ebay_connection").show();
        } else {
            $(".is_ebay_connection").hide();
        }
    });

    //Submit User profile details
    $('#submit_profile_details').validate({
        rules: {
            name: {
                required: true,
            },
        },
        messages: { },
        submitHandler: function (form, e) {
            e.preventDefault();

            var formData = $(form).serialize();
          
            //Ajax submit form
            $.ajax({
                type: 'POST',
                url: base_url + '/customer/submit-profile-details',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $('.disable-submit').prop('disabled', true);
                },
                success: function (response) {
                    $('.submit_profile_details_res').html(response);
                    $('.disable-submit').prop('disabled', false);
                }
            });
        }
    });

     //Change user email address
     $('#chanage_email_address').validate({
        rules: {
            email: {
                required: true,
            },
        },
        messages: { },
        submitHandler: function (form, e) {
            e.preventDefault();

            var formData = $(form).serialize();
          
            //Ajax submit form
            $.ajax({
                type: 'POST',
                url: base_url + '/customer/update-email',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $('.disable-submit').prop('disabled', true);
                },
                success: function (response) {
                    $('.chanage_email_address_res').html(response);
                    $('.disable-submit').prop('disabled', false);
                }
            });
        }
    });

    //Change password
    $('#submit_change_password').validate({
        rules: {
            old_password: {
                required: true,
            },
            new_password: {
                required: true,
            },
            confirm_password: {
                required: true,
            },
        },
        messages: { },
        submitHandler: function (form, e) {
            e.preventDefault();

            var formData = $(form).serialize();
          
            //Ajax submit form
            $.ajax({
                type: 'POST',
                url: base_url + '/customer/update-password',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $('.disable-submit').prop('disabled', true);
                },
                success: function (response) {
                    $('.submit_change_password_res').html(response);
                    $('.disable-submit').prop('disabled', false);
                }
            });
        }
    });

    //Submit delete my account
    $('#submit_delete_my_account').validate({
        rules: {
            confirm_account: {
                required: true,
            },
        },
        messages: {
            confirm_account: {
                required: "Please confirm your account deactivation by checking the box.",
            },
        },
        submitHandler: function(form, e) {
            e.preventDefault();
    
            // Check if the checkbox is checked before proceeding
            if ($('#confirm_account').is(':checked')) {
                var formData = $(form).serialize();
    
                // Ajax submit form
                $.ajax({
                    type: 'POST',
                    url: base_url + '/customer/submit-delete-my-account',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $('.disable-submit').prop('disabled', true);
                    },
                    success: function(response) {
                        $('.submit_delete_my_account_res').html(response);
                        $('.disable-submit').prop('disabled', false);
                    }
                });
            } else {
                alert('Please confirm your account deactivation by checking the box.');
            }
        }
    });    
});


