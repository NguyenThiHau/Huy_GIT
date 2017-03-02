/**
 * Created by Moe-tan on 12/7/2016.
 */4
// HAM MOVING DI CHUYEN
function moving(ctrl) {
    var text = $(ctrl).text();
    var order = parseInt($(ctrl).data('order'));
    var item = '<li class="item" data-order="' + order + '" ondblclick="moving(this);">' + text + '</li>';
    $(ctrl).remove();

    var checkBefore = false;
    if ($(ctrl).hasClass('left')) {
        $('#box2 .item').each(function () {
            var currentOrder = parseInt($(this).data('order'));
            if (currentOrder > order) {
                checkBefore = true;
                $(item).insertBefore(this);
                return false;
            }
        });
        if (!checkBefore) {
            $('#box2').append(item);
        }
        $('#box2 .item').removeClass('left');
    } else {
        $('#box1 .item').each(function () {
            var currentOrder = parseInt($(this).data('order'));
            if (currentOrder > order) {
                checkBefore = true;
                $(item).insertBefore(this);
                return false;
            }
        });
        if (!checkBefore) {
            $('#box1').append(item);
        }
        $('#box1 .item').addClass('left');
    }
}
// HAM MOVE ALL
function moveall() {
    $('#type1').on('click', function () {
        $('#box1 .item').each(function () {
            moving(this);
        })
    });
    $('#type4').on('click', function () {
        $('#box2 .item').each(function () {
            moving(this);
        })
    });
}

// HAM MOVE
function move() {
    //HAM TAO CLASS CHECKED
    $('body').on('click','li',function () {
        $(this).toggleClass("checked");
    });

    $('#type2').on('click', function () {
        $('#box1 .checked').each(function () {
            moving(this);
        })
    });

    $('#type3').on('click', function () {
        $('#box2 .checked').each(function () {
            moving(this);
        })
    });
}

$(document).ready(function () {
    moveall();
    move();
});
