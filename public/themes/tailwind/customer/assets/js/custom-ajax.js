//employee bank account details
$(document).ready(function () {
    
    //Form validation
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
                    $(".disable-submit").prop('disabled', false);
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
       
        /*var attachmentt_id = $(this).data('attachmentt_id');
        
        //Ajax call
        jQuery.ajax({  
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
            url: base_url+"/company/delete-attchements", 
            data: {
                _token : $('meta[name="csrf-token"]').attr('content'), 
                attachmentt_id:attachmentt_id
            }, 
            beforeSend: function() {
                ThisIs.attr('disabled', true);
            },
            success: function(response) {
                ThisIs.attr('disabled', false);
                $(".delete_attchemen_responce").html(response);
            }
        });*/
    });

    //update profile email address
    $('#update_profile_email').submit(function(e) {
        e.preventDefault();
        var email = $('#email').val();
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
            url: base_url+"/customer/update-email",
            data:{ email: email },
            success: function(response) {
                if (response.success) {
                    $('.submit_email_res').html(response);
                }else{
                    $('.submit_email_res').html(response);
                }
            }
        });
    });

    //update profile password
    $('#update_profile_password').submit(function(e) {
        e.preventDefault();
        var password = $('#password').val();
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
            url: base_url+"/customer/update-password",
            data:{ password: password },
            success: function(response) {
                if (response.success) {
                    $('.submit_password_res').html(response);
                }else{
                    $('.submit_password_res').html(response);
                }
            }
        });
    });
});


