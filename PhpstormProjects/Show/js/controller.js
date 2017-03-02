var perPage = 2;
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
function showPage(total) {
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
function showPageSearch(total) {
    //lam tron
    var countPage = (total / perPage);
    var rs = '<ul>';
    for (var i = 0; i < countPage; i++) {
        rs += '<li id="page-' + (i + 1) + '"' +
            'data-page="' + (i + 1) + '"' +
            'onclick="choosePageSearch(' + (i + 1) + ');">' + (i + 1) + '</li>';
    }
    rs += '</ul>';
    return rs;
}
function pagination() {
    /*Tong so ban ghi*/
    var total = $('#userJson tbody tr').length;
    $('#paging').html(showPage(total));
    var currentPage = $('#currentPage').val();
    $('#page-' + currentPage).addClass('active');

    $('#userJson tbody tr').each(function (idx) {
        if ((start(currentPage) <= idx) && (idx < end(currentPage))) {
            $(this).show();
        }
        else {
            $(this).hide();
        }
    });
}
function paginationSearch() {
    var totalRecord = parseInt($('tr.found').length);
    $('#paging').html(showPageSearch(totalRecord));
    //console.log("Total Record: " + totalRecord);
    choosePageSearch(1);
}
function choosePageSearch(page) {
    $('#currentPage').val(page);
    page = parseInt(page);
    var start = (page - 1) * perPage;
    var end = (page) * perPage;
    $('tr.found').each(function (idx) {
        if (start <= idx && idx < end) {
            $(this).show();
        }
        else {
            $(this).hide();
        }
    });
}
$(document).ready(function () {
    var student = [
        {name: "Tuan Anh", age: "24", phone: "0914113537"},
        {name: "Le Huy", age: "18", phone: "0913278268"},
        {name: "Duong Anh", age: "20", phone: "091244245"},
        {name: "Phan Anh", age: "12", phone: "0914123675"},
        {name: "Quang Nam", age: "30", phone: "0913478268"},
    ];
    for (var i = 0; i < student.length; i++) {
        var row = '<tr>';
        row += '<td>' + student[i].name + '</td>';
        row += '<td>' + student[i].age + '</td>';
        row += '<td>' + student[i].phone + '</td>';
        row += '</tr>';
        $('#dtable tbody').append(row);
    }
    $.getJSON("data/products_list_items.json", function (tables) {
        $.each(tables, function (i) {
            var row = '<tr>';
            row += '<td>' + tables[i].name + '</td>';
            row += '<td>' + tables[i].properties.id.type + '</td>';
            row += '<td>' + tables[i].properties.id.description + '</td>';
            row += '<td>' + tables[i].properties.id.required + '</td>';
            row += '<td>' + tables[i].properties.name.description + '</td>';
            row += '<td>' + tables[i].properties.name.type + '</td>';
            row += '<td>' + tables[i].properties.name.required + '</td>';
            row += '<td>' + tables[i].properties.price.type + '</td>';
            row += '<td>' + tables[i].properties.price.minimum + '</td>';
            row += '<td>' + tables[i].properties.price.required + '</td>';
            row += '<td>' + tables[i].properties.tags.type + '</td>';
            row += '<td>' + tables[i].properties.tags.items.type + '</td>';
            row += '</tr>';
            $('#jsontable tbody').append(row);
        });
    });

    //Dọc file tu json list items
    $.ajax({
        type: "GET",
        url: "http://localhost/PhpstormProjects/Show/data/products_list_items.json",
        success: function (data) {
            var rs = '';
            for (var i = 0; i < data.length; i++) {
                var item = data[i];
                rs += '<ul>';
                rs += '<li>Product : ' + item.name + '</li>';
                rs += '<li>ID : ' + item.properties.id.description + '</li>';
                rs += '<li>Name : ' + item.properties.name.description + '</li>';
                rs += '<li>Price : ' + item.properties.price.minimum + '</li>';
                rs += '</ul>';
            }
            $('#rsJson').html(rs);
        },
        error: function (xhr) {
            console.error(xhr.message);
        }
    });

    // ====================================================================================

    $('#btnsearch').click(function () {
        $('#formsearch').toggle();
    });
    $('#exit').click(function () {
        $('#formsearch').toggle();
        $('#searchid').val('');
        $('#searchname').val('');
        $('#searchnameofid').val('');
        $('#searchmessage').val('');
        pagination();
    });
    $('#search').click(function () {
        var searchid = $('#searchid').val();
        var searchname = $('#searchname').val();
        var searchnameofid = $('#searchnameofid').val();
        var searchmessage = $('#searchmessage').val();

        if (searchid != '' || searchname != '' || searchnameofid != '' || searchmessage != '') {
            $('#userJson tbody tr').each(function () {
                var id = $(this).find('.item-1').text();
                if (searchid != '') {
                    if (id.indexOf(searchid) >= 0) {
                        $(this).removeClass('hide');
                        $(this).addClass('found');
                    }
                    else {
                        $(this).addClass('hide');
                        $(this).removeClass('found');
                    }
                }
                var name = $(this).find('.item-2').text();
                if (searchname != '') {
                    if (name.indexOf(searchname) >= 0) {
                        $(this).removeClass('hide');
                        $(this).addClass('found');
                    }
                    else {
                        $(this).addClass('hide');
                        $(this).removeClass('found');
                    }
                }
                var nameofid = $(this).find('.item-3').text();
                if (searchnameofid != '') {
                    if (nameofid.indexOf(searchnameofid) >= 0) {
                        $(this).removeClass('hide');
                        $(this).addClass('found');
                    }
                    else {
                        $(this).addClass('hide');
                        $(this).removeClass('found');
                    }
                }
                var message = $(this).find('.item-4').text();
                if (searchmessage != '') {
                    if (message.indexOf(searchmessage) >= 0) {
                        $(this).removeClass('hide');
                        $(this).addClass('found');
                    }
                    else {
                        $(this).addClass('hide');
                        $(this).removeClass('found');
                    }
                }
            });
            paginationSearch();
        }
        else {
            $('#userJson tbody tr').removeClass('hide');
            $('#userJson tbody tr').removeClass('found');
            pagination();
        }
    });
    $('#btnview').click(function () {
        // Doc file tu json user
        $('#btnsearch').toggle();
        $('#userJson').toggle();
        $('#paging').toggle();
        $.ajax({
            type: "GET",
            url: "http://localhost/PhpstormProjects/Show/data/users.json",
            success: function (rs) {
                console.log(rs);
                var data = rs.data;
                var rs = '';
                for (var i = 0; i < data.length; i++) {
                    var user = data[i];
                    rs += '<tr>';
                    rs += '<td class="item-1">' + user.id + '</td>';
                    rs += '<td class="item-2">' + user.from.name + '</td>';
                    rs += '<td class="item-3">' + user.from.id + '</td>';
                    rs += '<td class="item-4">' + user.message + '</td>';
                    rs += '<td class="item-5">' + user.actions[0].link + '</td>';
                    rs += '<td class="item-6">' + user.actions[1].link + '</td>';
                    rs += '<td class="item-7">' + user.type + '</td>';
                    rs += '<td class="item-8">' + user.created_time + '</td>';
                    rs += '<td class="item-9">' + user.updated_time + '</td>';
                    rs += '</tr>';
                }
                $('#userJson tbody').html(rs);
                pagination();
            },
            error: function (xhr) {
                console.error(xhr.message);
            }
        });
    });
});


