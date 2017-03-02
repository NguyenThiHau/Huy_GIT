/**
 * Created by Moe-tan on 11/14/2016.
 */
$(document).ready(function () {
    /*$('#username,#password,#confirmpassword,#firstname,#lastname,#birthday,#address,#phone,#acc').on('keyup', function () {
     $('#message').html('');
     $('input').each(function () {
     if ($(this).val() == '' && $(this).data('message') != undefined) {
     $('#message').append('<p class="error">' + $(this).data('message') + '</p>').show();
     }
     });
     });*/
    $('#btnRegister').click(function () {
        //lay gia tri tu form
        var username = $.trim($('#username').val());
        var password = $.trim($('#password').val());
        var confirmpassword = $.trim($('#confirmpassword').val());
        var lastname = $.trim($('#lastname').val());
        var firstname = $.trim($('#firstname').val());
        var birthday = $.trim($('#birthday').val());
        var address = $.trim($('#address').val());
        var phone = $.trim($('#phone').val());
        var acc = $.trim($('#acc').val());
        var day = $.trim($('#day').val());
        var month = $.trim($('#month').val());
        var year = $.trim($('#year').val());
        var specialChars1 = /^[a-z0-9]{4,30}$/;
        var specialChars2 = /^[a-z0-9]{2,30}$/;
        var specialChars3 = /^[0-9]{1,13}$/;
        var specialChars4 = /^([0-9]{1,3})[-]([0-9]{1,4})[-]([0-9]{1,3})$/;

        $('#username_error').text('');
        if (username == '') {
            $('#username_error').text('Bạn không được bỏ trống trường này');
            $('#username_error').focus();
            return;
        }

        if (!specialChars1.test(username)) {
            $('#username_error').text('Tên đăng nhập từ 4 ký tự .Vui lòng chỉ sử dụng chữ cái (a-z), số.');
            $('#username_error').focus();
            return;
        }
        $('#password_error').text('');
        if (password == '') {
            $('#password_error').text('Bạn không được bỏ trống trường này');
            $('#password_error').focus();
        }
        $('#confirmpassword_error').text('');
        if (password != confirmpassword) {
            $('#confirmpassword_error').text('Mật khẩu nhập lại không đúng');
            $('#confirmpassword_error').focus();
        }

        $('#lastname_error').text('');
        if (lastname == '') {
            $('#lastname_error').text('Bạn không được bỏ trống trường này');
            $('#lastname_error').focus();
            return;
        }

        if (!specialChars2.test(lastname)) {
            $('#lastname_error').text('Họ đăng nhập từ 4 ký tự .Vui lòng chỉ sử dụng chữ cái (a-z), số.');
            $('#lastname_error').focus();
            return;
        }
        $('#firstname_error').text('');
        if (firstname == '') {
            $('#firstname_error').text('Bạn không được bỏ trống trường này');
            $('#firstname_error').focus();
            return;
        }

        if (!specialChars2.test(firstname)) {
            $('#firstname_error').text('Tên đăng nhập từ 4 ký tự .Vui lòng chỉ sử dụng chữ cái (a-z), số.');
            $('#firstname_error').focus();
            return;
        }
        if (month >= 1 && month <= 12) {
            $('#month_error').text('');
        } else {
            $('#month_error').text('Xin mời nhập lại tháng');
            $('#month_error').focus();
        }

        if (year <= 2005) {
            $('#year_error').text('');
        } else {
            $('#year_error').text('Xin mời nhập lại năm');
            $('#year_error').focus();
        }

        if (month == 1 || month == 3 || month == 5 || month == 7 || month == 8 || month == 10 || month == 12) {
            if (day <= 31 && day >= 1) {
                $('#day_error').text('');
            } else {
                $('#day_error').text('Xin mời nhập lại ngày');
                $('#day_error').focus();
            }
        }

        if (month == 4 || month == 6 || month == 9 || month == 11) {
            if (day <= 30 && day >= 1) {
                $('#day_error').text('');
            } else {
                $('#day_error').text('Xin mời nhập lại ngày');
                $('#day_error').focus();
            }
        }
        if (month == 2) {
            if (year % 4 == 0 && year % 100 != 0) {
                if (day <= 29 && day >= 1) {
                    $('#day_error').text('');
                } else {
                    $('#day_error').text('Xin mời nhập lại ngày');
                    $('#day_error').focus();
                }
            } else {
                if (day <= 28 && day >= 1) {
                    $('#day_error').text('');
                } else {
                    $('#day_error').text('Xin mời nhập lại ngày');
                    $('#day_error').focus();
                }
            }
        }

        $('#phone_error').text('');
        if (phone == '') {
            $('#phone_error').text('Bạn không được bỏ trống trường này');
            $('#phone_error').focus();
            return;
        }

        if (!specialChars3.test(phone)) {
            $('#phone_error').text('Số điện thoại không đúng vui lòng nhập lại.');
            $('#phone_error').focus();
            return false;
        }
        $('#acc_error').text('');
        if (acc == '') {
            $('#acc_error').text('Bạn không được bỏ trống trường này');
            $('#acc_error').focus();
            return;
        }

        if (!specialChars4.test(acc)) {
            $('#acc_error').text('Vui lòng nhập đúng định dạng số tài khoản.');
            $('#acc_error').focus();
            return;
        }
    });
    $('#btnReset').click(function () {
        $('#username').val('');
        $('#username_error').text('');
        $('#password').val('');
        $('#password_error').text('');
        $('#confirmpassword').val('');
        $('#confirmpassword_error').text('');
        $('#lastname').val('');
        $('#lastname_error').text('');
        $('#firstname').val('');
        $('#firstname_error').text('');
        $('#day').val('');
        $('#day_error').text('');
        $('#month').val('');
        $('#month_error').text('');
        $('#year').val('');
        $('#year_error').text('');
        $('#address').val('');
        $('#phone').val('');
        $('#phone_error').text('');
        $('#acc').val('');
        $('#acc_error').text('');
    });
});