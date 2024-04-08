//employee bank account details
$(document).ready(function () {
    
    //Form validation
    $('#submit_employee_bnk_acccunt').validate({
        rules: {
            bank_name: {
                required: true,
            },
            ifc_no: {
                required: true,
            },
            account_no: {
                required: true,
                number: true,
                minlength: 9,
                maxlength: 15
            }
            
        },
        messages: { },
        submitHandler: function (form, e) {
            e.preventDefault();

            var formData = $(form).serialize();
            
            //Ajax employee submit form
            $.ajax({
                type: 'POST',
                url: base_url + '/company/employee-submit-bank-account',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $(".com_ajax_loader").show();
                    $('.disable-submit').prop('disabled', true);
                },
                success: function (response) {
                    $('.submit_employee_bnk_acccunt_res').html(response);
                    $(".disable-submit").prop('disabled', false);
                    $(".com_ajax_loader").hide();
                }
            });
        }
    }); 

    //Form validation
    $('#submit_supplier_bnk_acccunt').validate({
        rules: {
            bank_name: {
                required: true,
            },
            ifc_no: {
                required: true,
            },
            account_no: {
                required: true,
                number: true,
                minlength: 9,
                maxlength: 15
            }            
        },
        messages: { },
        submitHandler: function (form, e) {
            e.preventDefault();

            var formData = $(form).serialize();
            
            //Ajax supplier submit form
            $.ajax({
                type: 'POST',
                url: base_url + '/company/supplier-submit-bank-account',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $(".com_ajax_loader").show();
                    $('.disable-submit').prop('disabled', true);
                },
                success: function (response) {
                    $('.submit_supplier_bnk_acccunt_res').html(response);
                    $(".disable-submit").prop('disabled', false);
                    $(".com_ajax_loader").hide();
                }
            });
        }
    });

    //Validation for submit supplier documents
    $('#submit_supplier_uplaod_documents').validate({
        rules: {
            supplier_id: {
                required: true,
            },
            supplier_company_docs: {
                required: true,
                extension: "pdf|doc|docx"
            },
            supplier_director_ids: {
                required: true,
                extension: "pdf|doc|docx"
            },
            supplier_adress: {
                required: true,
                extension: "pdf|doc|docx"
            },
            supplier_sars_vat_document: {
                required: true,
                extension: "pdf|doc|docx"
            },
            supplier_sars_tax_certificate: {
                required: true,
                extension: "pdf|doc|docx"
            },           
        },
        messages: { },
        submitHandler: function (form, e) {
            e.preventDefault();

            var formData = new FormData(form);
            
            // Ajax supplier submit form
            $.ajax({
                type: 'POST',
                url: base_url + '/company/supplier-submit-documents',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $(".com_ajax_loader").show();
                    $('.disable-submit').prop('disabled', true);
                },
                success: function (response) {
                    $('.submit_supplier_uplaod_res').html(response);
                    $(".disable-submit").prop('disabled', false);
                    $(".com_ajax_loader").hide();
                }
            });
        }
    });
   
    //Form validation
    $('#submit_customer_bnk_acccunt').validate({
        rules: {
            bank_name: {
                required: true,
            },
            ifc_no: {
                required: true,
            },
            account_no: {
                required: true,
                number: true,
                minlength: 9,
                maxlength: 15
            }            
        },
        messages: { },
        submitHandler: function (form, e) {
            e.preventDefault();

            var formData = $(form).serialize();
            
            //Ajax customer submit form
            $.ajax({
                type: 'POST',
                url: base_url + '/company/customer-submit-bank-account',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    $(".com_ajax_loader").show();
                    $('.disable-submit').prop('disabled', true);
                },
                success: function (response) {
                    $('.submit_costomer_bnk_acccunt_res').html(response);
                    $(".disable-submit").prop('disabled', false);
                    $(".com_ajax_loader").hide();
                }
            });
        }
    });

    //Delete attchements
    $('body').on('click', '.delete_attchements', function(event) {
        event.preventDefault();
        var ThisIs = $(this);
        var attachmentt_id = $(this).data('attachmentt_id');
        
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
        });
    });
});


