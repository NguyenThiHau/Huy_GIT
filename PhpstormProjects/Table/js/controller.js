//function Delete
function deleteItem(ctrl) {
    $(ctrl).parent().parent().remove();
}
//function Edit
function editItem(ctrl) {

    //check gia tri edit
    $('#checkEdit').val('true');

    var pr = $(ctrl).parent().parent();
    var id = $(pr).find('td.item-1').text();
    var name = $(pr).find('td.item-2').text();
    var age = $(pr).find('td.item-3').text();
    var address = $(pr).find('td.item-4').text();
    var phone = $(pr).find('td.item-5').text();
    var dob = $(pr).find('td.item-6').text();
    var email = $(pr).find('td.item-7').text();
    var username = $(pr).find('td.item-8').text();
    var status = $(pr).find('td.item-9').text();
    $('#id').val(id);
    $('#name').val(name);
    $('#age').val(age);
    $('#address').val(address);
    $('#phone').val(phone);
    $('#dob').val(dob);
    $('#email').val(email);
    $('#username').val(username);
    $('#status').val(status);
    //Set readonly khong cho sua truong id
    $('#id').attr('readonly', 'readonly');
}
$(document).ready(function () {
    //function hide
    $('#btnaddnew').on('click', function () {
        $('#formnew').removeClass('hide');
        $('#formsearch').addClass('hide');
        $('#checkEdit').val('false');
        $('#id').removeAttr('readonly');
    });
    $('#btnsearch').on('click', function () {
        $('#formnew').addClass('hide');
        $('#formsearch').removeClass('hide');
    });
    //function cancel
    $('#cancel').click(function () {
        $('#formnew').addClass('hide');
    });
    //function exit
    $('#exit').click(function () {
        $('#formsearch').addClass('hide');
        $('#dtable tbody tr').removeClass('yellow');
    });

    $('#save').click(function () {
        if ($('#checkEdit').val() == 'false') {
            //Create new
            var row = '<tr>';
            $('#formnew input').each(function (idx) {
                row += '<td class="item-' + (idx + 1) + '">' + $(this).val() + '</td>';
                $(this).val('');
            });
            row += '<td>' +
                '   <a href="#" onclick="editItem(this);">Edit</a> ' +
                '   | ' +
                '   <a href="#" onclick="deleteItem(this);">Delete</a>' +
                '</td>';
            row += '</tr>';
            $('tr.message').hide(); // an record di
            $('#dtable tbody').append(row);
        }
        else {
            //update edit
            $('#dtable tbody tr').each(function () {
                var id = $(this).find('.item-1').text();
                if ($('#id').val() == id) {
                    var name = $('#name').val();
                    var age = $('#age').val();
                    var address = $('#address').val();
                    var phone = $('#phone').val();
                    var dob = $('#dob').val();
                    var email = $('#email').val();
                    var username = $('#username').val();
                    var status = $('#status').val();

                    $(this).find('.item-2').text(name);
                    $(this).find('.item-3').text(age);
                    $(this).find('.item-4').text(address);
                    $(this).find('.item-5').text(phone);
                    $(this).find('.item-6').text(dob);
                    $(this).find('.item-7').text(email);
                    $(this).find('.item-8').text(username);
                    $(this).find('.item-9').text(status);
                }
            });
        }
    })
    $('#cancel').click(function () {
        $('#id').val('');
        $('#name').val('');
        $('#age').val('');
        $('#address').val('');
        $('#phone').val('');
        $('#dob').val('');
        $('#email').val('');
        $('#username').val('');
        $('#status').val('');
    })
    $('#exit').click(function () {
        $('#idsearch').val('');
        $('#namesearch').val('');
        $('#agesearchmin').val('');
        $('#agesearchmax').val('');
        $('#dtable tbody tr').removeClass('hide');
    })
    $('#search').click(function () {
        var idsearch = $('#idsearch').val();
        var namesearch = $('#namesearch').val();
        var agesearchmin = $('#agesearchmin').val() ? parseInt($('#agesearchmin').val()) : null;
        var agesearchmax = $('#agesearchmax').val() ? parseInt($('#agesearchmax').val()) : null;
        if (idsearch != '' || namesearch != '' || agesearchmin != null || agesearchmax != null) {
            $('#dtable tbody tr').each(function () {
                var id = $(this).find('.item-1').text();
                if (idsearch != '') {
                    if (id.indexOf(idsearch) >= 0) {
                        $(this).addClass('yellow');
                        $(this).removeClass('hide');
                    }
                    else {
                        $(this).removeClass('hide');
                        $(this).removeClass('yellow');
                    }
                }
                var name = $(this).find('.item-2').text();
                if (namesearch != '') {
                    if (name.indexOf(namesearch) >= 0) {
                        $(this).addClass('yellow');
                        $(this).removeClass('hide');
                    }
                    else {
                        $(this).removeClass('hide');
                        $(this).removeClass('yellow');
                    }
                }
                var age = $(this).find('.item-3').text();
                if (agesearchmin != null || agesearchmax != null) {
                    if (agesearchmin != null && agesearchmax != null) {
                        if (age >= agesearchmin && age <= agesearchmax) {
                            $(this).addClass('yellow');
                            $(this).removeClass('hide');
                        }
                        else {
                            $(this).removeClass('hide');
                            $(this).removeClass('yellow');
                        }
                    } else if (agesearchmin != null) {
                        if (age == agesearchmin) {
                            $(this).addClass('yellow');
                            $(this).removeClass('hide');
                        }
                        else {
                            $(this).removeClass('hide');
                            $(this).removeClass('yellow');
                        }
                    } else if (agesearchmax != null) {
                        if (age == agesearchmax) {
                            $(this).addClass('yellow');
                            $(this).removeClass('hide');
                        }
                        else {
                            $(this).removeClass('hide');
                            $(this).removeClass('yellow');
                        }
                    }
                }
            });
        }
        else {
            $('#dtable tbody tr').removeClass('hide');
        }
    })
});