/*
 *  Document   : formsValidation.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Forms Validation page
 */

 var FormsValidation = function() {

    return {
        init: function() {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

             /* Initialize Form Validation */
             $('#form-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                }, 
                
                
                
                
                
                
                
                
                rules: {
                    'first_name': {
                        required: true
                    },
                    'last_name': {
                        required: true
                    },
                    'ic_no': {
                        required: true,
                        minlength: 12,
                        number: true
                    },
                    'telephone_no': {
                        required: true,
                        minlength: 10,
                        number: true
                    },
                    'gender': {
                        required: true
                    },
                    'email': {
                        required: true,
                        email: true
                    },
                    'passwordreg': {
                        required: true,
                        minlength: 6
                    },
                    'cpasswordreg': {
                        required: true,
                        equalTo: '#passwordreg'
                    }
                },
                messages: {
                    'first_name': {
                        required: 'Please enter your first name'
                    },
                    'last_name': {
                        required: 'Please enter your last name'
                    },
                    'ic_no': {
                        required: 'Please enter your identification card',
                        minlength: 'Please enter 12 digit only',
                        number: 'Please enter number only'
                    },
                    'telephone_no': {
                        required: 'Please enter your phone number',
                        minlength: 'Please enter your phone number',
                        number: 'Please enter number only'
                    },
                    'gender': {
                        required: 'Please select your gender'
                    },
                    'email': 'Please enter a valid email address',
                    'passwordreg': {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 6 characters long'
                    },
                    'cpasswordreg': {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 6 characters long',
                        equalTo: 'Please enter the same password as above'
                    }
                }
            });

            // Initialize Masked Inputs
            // a - Represents an alpha character (A-Z,a-z)
            // 9 - Represents a numeric character (0-9)
            // * - Represents an alphanumeric character (A-Z,a-z,0-9)
            $('#masked_date').mask('99/99/9999');
            $('#masked_date2').mask('99-99-9999');
            $('#masked_phone').mask('(999) 999-9999');
            $('#masked_phone_ext').mask('(999) 999-9999? x99999');
            $('#masked_taxid').mask('99-9999999');
            $('#masked_ssn').mask('999-99-9999');
            $('#masked_pkey').mask('a*-999-a999');
        }
    };
}();