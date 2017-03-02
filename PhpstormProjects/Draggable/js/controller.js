$(document).ready(function () {
    //bat su kien chuot
    $('#container').on('mousemove', function (e) {
        var pointTop = e.pageY;
        var pointLeft = e.pageX;
        //Set toa do chuot div con co id la child theo toa do cua chuot
        //Lay ve chieu rong va chieu dai cua khoi div cha
        var parentHeight = parseInt($('#container').height());
        var parentWidth = parseInt($('#container').width());
        var pTop = $(this).offset().top;
        var pLeft = $(this).offset().left;

        var childHeight = parseInt($('#child').height());
        var childWidth = parseInt($('#child').width());

        var pointTop = e.pageY - (childHeight / 2);
        var pointLeft = e.pageX - (childWidth / 2);
        //Toa do cua the div con phai lon hon toa do cua ben ben trai the div cha
        //va nho hon toa do ben phai cua the div cha
        //do the div con da duoc can vao giua nen chung ta lay tong toa do - chieu rong cua the div con
        if (pLeft <= pointLeft && pointLeft <= ((pLeft + parentWidth) - childWidth) &&
            pTop <= pointTop && pointTop <= ((pTop + parentHeight) - childHeight)) {
            $('#child').offset({top: pointTop, left: pointLeft});
        }
        console.log('Toa do cua chuot: X:' + pointLeft + " -Y: " + pointTop);
    })
});