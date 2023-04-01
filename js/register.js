'use strict';
new WOW().init();
$(window).on("load", function() {
    $('.register').fadeOut();
});
$(document).ready(function() {
    $('#rsvp').bootstrapValidator({
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    }
                }
            },
            uaddress: {
                validators: {
                    notEmpty: {
                        message: 'The address is required and cannot be empty'
                    }
                }
            },
            uphone: {
                validators: {
                    notEmpty: {
                        message: 'Please enter valid phone number'
                    },
                    regexp: {
                        regexp: /^[0-9]{10}$/,
                        message: 'The phone number can only consist of numbers with 10 digits'
                    }
                }
            },
            uemail: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            upassword: {
                validators: {
                    notEmpty: {
                        message: 'Password has 8 characters'
                    }
                }
            },
            conpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password as above'
                    }
                }
            },
        }
    });
    $("button[type='reset']").on("click",function () {
        $("#rsvp").bootstrapValidator("resetForm",true);
    })
});