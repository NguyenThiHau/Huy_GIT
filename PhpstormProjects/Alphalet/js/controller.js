/**
 * Created by Moe-tan on 12/21/2016.
 */
$(document).ready(function () {
    //Init add comment event
    $('#btnComment').click(function () {
        var line1 = ['a', 'b', 'c', 'd', 'e', 'f'];
        var line2 = ['g', 'h', 'i', 'j', 'k', 'l'];
        var line3 = ['m', 'n', 'o', 'p', 'q', 'r'];
        var line4 = ['s', 't', 'u', 'v', 'w', 'x'];
        var line5 = ['y', 'z'];

        var x1 = 40;
        var x2 = 40;
        var x3 = 40;
        var x4 = 40;
        var x5 = 40;
        var name = $.trim($('#txtName').val().toLowerCase());
        var content = $('#txtComment').val();
        var avatar = name.charAt(0);
        $('#list').append('<div class="item">' +
            '   <div class="avatar ' + avatar + '"></div>' +
            '   <div class="content">' +
            '       <p>' + $('#txtName').val() + '</p>' +
            '       <p>' + content + '</p>' +
            '   </div>' +
            '</div>');
        for (var item in line1) {
            $('#list .item .' + line1[item] + '').css('background-position', '-' + x1 + 'px -48px');
            x1 += 80;
            console.log(x1);
        }
        for (var item in line2) {
            $('#list .item .' + line2[item] + '').css('background-position', '-' + x2 + 'px -138px');
            x2 += 80;
            console.log(x1);
        }
        for (var item in line3) {
            $('#list .item .' + line3[item] + '').css('background-position', '-' + x3 + 'px -226px');
            x3 += 80;
            console.log(x1);
        }
        for (var item in line4) {
            $('#list .item .' + line4[item] + '').css('background-position', '-' + x4 + 'px -315px');
            x4 += 80;
            console.log(x1);
        }
        for (var item in line5) {
            $('#list .item .' + line5[item] + '').css('background-position', '-' + x5 + 'px -403px');
            x5 += 80;
            console.log(x1);
        }
        //reset field
        $('#txtName').val('');
        $('#txtComment').val('');
    });
});