/**
 * Created by Moe-tan on 11/21/2016.
 */
var perPage = 10;
function start(cPage) {
    return (cPage - 1) * perPage;
}
function end(cPage) {
    return cPage * perPage;
}
function choosePage(page) {
    $('#currentPage').val(page);
    pagination();
}
function pagination() {
    /*Tong so ban ghi*/
    //console.log('Total :' + $('#dtable tbody tr').length);
    var total = $('#dtable tbody tr').length;
    $('#paging').html(showPage(total));
    var currentPage = $('#currentPage').val();
    $('#page-' + currentPage).addClass('active');

    $('#dtable tbody tr').each(function (idx) {
        //var tag = $(this);
        //currentPage = 1;
        if ((start(currentPage) <= idx) && (idx < end(currentPage))) {
            $(this).show();
        }
        else {
            $(this).hide();
        }
    });
}

function showPage(total) {
    // var countPage = (total % perPage == 0) ? (total / perPage) : (total / perPage) + 1;
    //lam tron
    var countPage = (total / perPage);
    var rs = '<ul>';
    for (var i = 0; i < countPage; i++) {
        rs += '<li id="page-' + (i + 1) + '"' +
            'data-page="' + (i + 1) + '"' +
            'onclick="choosePage(' + (i + 1) + ');">' + (i + 1) + '</li>';
    }
    rs += '</ul>';
    return rs;
}
$(document).ready(function () {
    //HIDE ADD
    $('#btnaddnew').on('click', function () {
        $('#formnew').removeClass('hide');
        $('#formsearch').addClass('hide');
    });
    //HIDE SEARCH
    $('#btnsearch').on('click', function () {
        $('#formsearch').removeClass('hide');
        $('#formnew').addClass('hide');
    });


    //SAVE ADD CREAT
    $('#save').click(function () {
        var id = $.trim($('#id').val());
        var product = $.trim($('#product').val());
        var price = $.trim($('#price').val());
        var kind = $.trim($('#kind').val());
        var number = $.trim($('#number').val());
        var specialChars = /^[0-9]{1,15}$/;
        //CHECK
        $('#id_error').text('');
        if (id == '') {
            $('#id_error').text('Vui lòng nhập ID');
            $('#id_error').focus();
            return;
        }
        $('#product_error').text('');
        if (product == '') {
            $('#product_error').text('Vui lòng nhập sản phẩm');
            $('#product_error').focus();
            return;
        }
        $('#price_error').text('');
        if (price == '') {
            $('#price_error').text('Vui lòng nhập giá');
            $('#price_error').focus();
            return;
        }
        if (!specialChars.test(price)) {
            $('#price_error').text('Vui lòng nhập số');
            $('#price_error').focus();
            return;
        }
        $('#kind_error').text('');
        if (kind == '') {
            $('#kind_error').text('Vui lòng nhập loại');
            $('#kind_error').focus();
            return;
        }
        $('#number_error').text('');
        if (number == '') {
            $('#number_error').text('Vui lòng nhập số lượng');
            $('#number_error').focus();
            return;
        }
        if (!specialChars.test(number)) {
            $('#number_error').text('Vui lòng nhập số')
            $('#number_error').focus();
            return;
        }
        var row = '<tr>';
        $('#formnew input').each(function (idx) {
            row += '<td class="item-' + (idx + 1) + '">' + $(this).val() + '</td>';
            $(this).val('');
        });
        $('#dtable tbody').append(row);
        pagination()
    });

    $('#cancel').click(function () {
        $('#id').val('');
        $('#product').val('');
        $('#price').val('');
        $('#kind').val('');
        $('#number').val('');
        $('#formnew').addClass('hide');
    })
    $('#exit').click(function () {
        $('#searchid').val('');
        $('#searchproduct').val('');
        $('#searchprice').val('');
        $('#searchkind').val('');
        $('#formsearch').addClass('hide');
        $('#dtable tbody tr').removeClass('hide');
        $('#dtable tbody tr').each(function () {
            var id = $(this).find('.item-1').text();
            $(this).find('.item-1').html(id);
            var product = $(this).find('.item-2').text();
            $(this).find('.item-2').html(product);
            var price = $(this).find('.item-3').text();
            $(this).find('.item-3').html(price);
            var kind = $(this).find('.item-4').text();
            $(this).find('.item-4').html(kind);
        });
        $('#dtable tbody tr').removeClass('yellow')
    });
    //SEARCH
    $('#search').click(function () {
        var searchid = $('#searchid').val();
        var searchproduct = $('#searchproduct').val();
        var searchprice = $('#searchprice').val();
        var searchkind = $('#searchkind').val();

        if (searchid != '' || searchproduct != '' || searchprice != '' || searchkind != '') {
            $('#dtable tbody tr').each(function () {
                var id = $(this).find('.item-1').text();
                if (searchid != '') {
                    if (id.indexOf(searchid) >= 0) {
                        //$(this).removeClass('hide');
                        //danh dau mau cho text tim duoc
                        var newTxt = id.replace(searchid, '<span>' + searchid + '</span>');
                        $(this).find('.item-1').html(newTxt);
                        $(this).addClass('yellow');
                    }
                    else {
                        //$(this).addClass('hide');
                        $(this).removeClass('yellow');
                    }
                }
                var product = $(this).find('.item-2').text();
                //var productNew = product.toLowerCase();
                //var searchproductNew = searchproduct.toLowerCase();
                if (searchproduct != '') {
                    if (product.indexOf(searchproduct) >= 0) {
                        //$(this).removeClass('hide');
                        var newTxt = product.replace(searchproduct, '<span>' + searchproduct + '</span>');
                        $(this).find('.item-2').html(newTxt);
                        $(this).addClass('yellow');
                    }
                    else {
                        //$(this).addClass('hide');
                        $(this).removeClass('yellow');
                    }
                }
                var price = $(this).find('.item-3').text();
                if (searchprice != '') {
                    if (price.indexOf(searchprice) >= 0) {
                        //$(this).removeClass('hide');
                        var newTxt = price.replace(searchprice, '<span>' + searchprice + '</span>');
                        $(this).find('.item-3').html(newTxt);
                        $(this).addClass('yellow');
                    }
                    else {
                        //$(this).addClass('hide');
                        $(this).removeClass('yellow');
                    }
                }
                var kind = $(this).find('.item-4').text();
                if (searchkind != '') {
                    if (kind.indexOf(searchkind) >= 0) {
                        //$(this).removeClass('hide');
                        var newTxt = kind.replace(searchkind, '<span>' + searchkind + '</span>');
                        $(this).find('.item-4').html(newTxt);
                        $(this).addClass('yellow');
                    }
                    else {
                        //$(this).addClass('hide');
                        $(this).removeClass('yellow');
                    }
                }
            })
        }
        else {
            //$('#dtable tbody tr').removeClass('hide');
        }
    });

    pagination();
});
