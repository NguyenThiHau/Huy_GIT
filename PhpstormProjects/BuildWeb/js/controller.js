/**
 * Created by Moe-tan on 12/13/2016. ver.01
 */
function show() {
    $('.start').click(function () {
        location.reload();
    });

    $('.cart').on('click', function () {
        $('#dbtable').toggleClass('hide');
        $('.test').toggleClass('hide');
    });

    $('.menu01').on('mousemove', function () {
        $('.all_click1').removeClass('hide');
        $('.all_click2').removeClass('hide');
        $('.all_click3').removeClass('hide');
        $('.all_click4').removeClass('hide');
        $('.all_click5').removeClass('hide');
        $('.all_click6').removeClass('hide');
    });

    $('.menu01').on('mouseout', function () {
        $('.all_click1').addClass('hide');
        $('.all_click2').addClass('hide');
        $('.all_click3').addClass('hide');
        $('.all_click4').addClass('hide');
        $('.all_click5').addClass('hide');
        $('.all_click6').addClass('hide');
    });

    $('.menu02').on('mousemove', function () {
        $('.ve_click1').removeClass('hide');
        $('.ve_click2').removeClass('hide');
        $('.ve_click3').removeClass('hide');
        $('.ve_click4').removeClass('hide');
        $('.ve_click5').removeClass('hide');
        $('.ve_click6').removeClass('hide');
    });

    $('.menu02').on('mouseout', function () {
        $('.ve_click1').addClass('hide');
        $('.ve_click2').addClass('hide');
        $('.ve_click3').addClass('hide');
        $('.ve_click4').addClass('hide');
        $('.ve_click5').addClass('hide');
        $('.ve_click6').addClass('hide');
    });

    $('.menu03').on('mousemove', function () {
        $('.fr_click1').removeClass('hide');
        $('.fr_click2').removeClass('hide');
        $('.fr_click3').removeClass('hide');
        $('.fr_click4').removeClass('hide');
        $('.fr_click5').removeClass('hide');
        $('.fr_click6').removeClass('hide');
    });

    $('.menu03').on('mouseout', function () {
        $('.fr_click1').addClass('hide');
        $('.fr_click2').addClass('hide');
        $('.fr_click3').addClass('hide');
        $('.fr_click4').addClass('hide');
        $('.fr_click5').addClass('hide');
        $('.fr_click6').addClass('hide');
    });

    $('.menu04').on('mousemove', function () {
        $('.ju_click1').removeClass('hide');
        $('.ju_click2').removeClass('hide');
    });

    $('.menu04').on('mouseout', function () {
        $('.ju_click1').addClass('hide');
        $('.ju_click2').addClass('hide');
    });

    // ================MENU====================

    $('.all_click1').on('click', function () {
        $('.menu09').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.all_click2').on('click', function () {
        $('.menu02').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.all_click3').on('click', function () {
        $('.menu04').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.all_click4').on('click', function () {
        $('.menu03').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.all_click5').on('click', function () {
        $('.menu02').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu1').on('click', function () {
        $('.menu01').removeClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu2').on('click', function () {
        $('.menu02').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu3').on('click', function () {
        $('.menu03').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu4').on('click', function () {
        $('.menu04').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu5').on('click', function () {
        $('.menu05').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu6').on('click', function () {
        $('.menu06').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu7').on('click', function () {
        $('.menu07').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu8').on('click', function () {
        $('.menu08').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu09').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu9').on('click', function () {
        $('.menu09').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu010').addClass('hide');
    });

    $('.menu10').on('click', function () {
        $('.menu010').removeClass('hide');
        $('.menu01').addClass('hide');
        $('.menu02').addClass('hide');
        $('.menu03').addClass('hide');
        $('.menu04').addClass('hide');
        $('.menu05').addClass('hide');
        $('.menu06').addClass('hide');
        $('.menu07').addClass('hide');
        $('.menu08').addClass('hide');
        $('.menu09').addClass('hide');
    });
}
// ===============TABLE=======================
function buynow() {
    $("#dtable").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        },
        width: 600,
        height: 300
    });
    $('.ve_click1').on('click', function () {
        $("#dtable").dialog("open");
        //$('#dtable').removeClass('hide');
        //lam mo xung quanh
        // $('.test').append('<div id="over"></div>');
        // $('#over').fadeIn(300);

        if ($(this).hasClass('hanh')) {
            $('.product').val("Hành tây");
        }
    });
    $('.ve_click2').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('dua')) {
            $('.product').val("Dưa leo");
        }
    });
    $('.ve_click3').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('sulo')) {
            $('.product').val("Su lơ");
        }
    });
    $('.ve_click4').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('khoaimon')) {
            $('.product').val("Khoai môn");
        }
    });
    $('.ve_click5').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('khoaitay')) {
            $('.product').val("Khoai tây");
        }
    });
    $('.ve_click6').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('muop')) {
            $('.product').val("Mướp");
        }
    });

    $('.fr_click1').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('tao')) {
            $('.product').val("Táo");
        }
    });

    $('.fr_click2').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('cam')) {
            $('.product').val("Cam tươi");
        }
    });

    $('.fr_click3').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('nho')) {
            $('.product').val("Nho");
        }
    });

    $('.fr_click4').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('dua')) {
            $('.product').val("Dứa");
        }
    });

    $('.fr_click5').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('xoai')) {
            $('.product').val("Xoài");
        }
    });

    $('.fr_click6').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('cachua')) {
            $('.product').val("Cà chua");
        }
    });

    $('.ju_click1').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('nuoccam')) {
            $('.product').val("Nước cam");
        }
    });

    $('.ju_click2').on('click', function () {
        $("#dtable").dialog("open");
        if ($(this).hasClass('nuocxoai')) {
            $('.product').val("Nước xoài");
        }
    });

    $('.add').on('click', function () {
        var product = $.trim($('.product').val());
        var number = parseInt($.trim($('.number').val()));
        var check = false;
        // var row = '<tr>';
        // if (number != '') {
        //     $('#dtable input').each(function (idx) {
        //         row += '<td class="item-' + (idx + 1) + '">' + $(this).val() + '</td>';
        //         $(this).val('');
        //     });
        //     $('#dbtable tbody').append(row);
        //     alert("Bạn đã nhập thành công")
        // }
        // else {
        //     // $('#number_error').text('Vui lÒng nhập số lượng');
        //     // $('#number_error').focus();
        //     alert("Vui lòng nhập số lượng")
        // }
        if (!$('tr').hasClass('mytest')) {
            row = "<tr class=mytest>";
            row += "<td class=item-1>" + product + "</td>";
            row += "<td class=item-2>" + number + "</td>";
            row += "</tr>";
            $('#dbtable tbody').append(row);
            alert('Ban da mua thanh cong');
        }
        else {
            $('.mytest').each(function () {
                if ($(this).find('.item-1').html() == product) {
                    var numbertest = parseInt($('.item-2').html());
                    $(this).find('.item-2').text(number + numbertest);
                    alert('Ban da mua thanh cong');
                    check = false;
                    return false;
                } else {
                    check = true;
                }
            });
            if (check) {
                row = "<tr class=mytest>";
                row += "<td class=item-1>" + product + "</td>";
                row += "<td class=item-2>" + number + "</td>";
                row += "</tr>";
                $('#dbtable tbody').append(row);
                alert('Ban da mua thanh cong');
                check = false;
            }
        }
    });

    $('.exit').on('click', function () {
        $("#dtable").dialog("close");
        $('.number').val('');
    });
}
// ===============SEARCH=======================
function search() {
    //SEARCH
    $('.formsearch').keypress(function () {
        var formsearch = $('.formsearch').val();
        if (formsearch != '') {
            $('.catalog').each(function () {
                var product = $(this).data('order');
                if (product.indexOf(formsearch) == 0) {
                    $(this).parent().removeClass('hide');
                } else {
                    $(this).parent().addClass('hide');
                }
            });
        }
        else {
            //$(this).removeClass('hide');
            $('.catalog').parent().addClass('hide');
            $('.menu01').removeClass('hide');
        }
    });
}

/*=================DIALOG========================*/
$(document).ready(function () {
    show();
    buynow();
    search();
});


