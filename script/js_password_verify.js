/**
 * Created by Yujie on 31/10/14.
 */
$(document).ready(function () {

    $('#new_user_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            //password: {
            //    validators: {
            //        identical: {
            //            field: 'confirmPassword',
            //            message: 'The password and its confirm are not the same'
            //        }
            //    }
            //},
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });

    //you have to use keyup, because keydown will not catch the currently entered value
    //$('input[type=password]').keyup(function () {
    //
    //    // set password variable
    //    var pswd = $(this).val();
    //    //validate the length
    //    if (pswd.length < 6) {
    //        $('#length').removeClass('valid').addClass('invalid');
    //    } else {
    //        $('#length').removeClass('invalid').addClass('valid');
    //    }
        //
        ////validate letter
        //if (pswd.match(/[A-z]/)) {
        //    $('#letter').removeClass('invalid').addClass('valid');
        //} else {
        //    $('#letter').removeClass('valid').addClass('invalid');
        //}
        //
        ////validate uppercase letter
        //if (pswd.match(/[A-Z]/)) {
        //    $('#capital').removeClass('invalid').addClass('valid');
        //} else {
        //    $('#capital').removeClass('valid').addClass('invalid');
        //}
        //
        ////validate number
        //if (pswd.match(/\d/)) {
        //    $('#number').removeClass('invalid').addClass('valid');
        //} else {
        //    $('#number').removeClass('valid').addClass('invalid');
        //}

    //}).focus(function () {
    //    $(':button').show();
    //}).blur(function () {
    //    $(':button').hide();
    //});


});