/*$(document).ready(function () {
 var interval;
 //tao auto chuyen slide
 function startSlide() {
 interval = setInterval(function () {
 $('#next').click();
 }, 1500);
 }

 //xoa interval
 function stopSlide() {
 clearInterval(interval);
 }

 // click prev
 $('#prev').on('click', function () {
 //stopSlide de khi click prev no se khong auto chuyen den hinh ke tiep
 stopSlide();
 var stt = $('img.active').attr('stt'); //0
 //remove class active of img & li
 $('img').eq(stt).removeClass('active');
 $('span').eq(stt).removeClass('active');

 prev = --stt;  //-1
 if (prev == -1)
 prev = 2;

 //add class active of img & li
 $('img').eq(prev).addClass('active');
 $('span').eq(prev).addClass('active');
 startSlide();
 });

 //click next

 $('#next').on('click', function () {

 //stopSlide de khi click next no se khong auto chuyen den hinh ke tiep
 stopSlide();
 //get stt of img show
 var stt = $('img.active').attr('stt'); //4

 //remove class active of img & li
 $('img').eq(stt).removeClass('active');
 $('span').eq(stt).removeClass('active');

 next = ++stt; // 5
 if (next == 3)
 next = 0;

 //add class active of img & li index next
 $('img').eq(next).addClass('active');
 $('span').eq(next).addClass('active');
 startSlide();
 });

 // mouseover -> stopSlide & mouseout -> startSlide
 $('img').on('mouseover', stopSlide).on('mouseout', startSlide);
 startSlide();
 $('span').on('click', function () {
 stopSlide();
 var stt = $('img.active').attr('stt'); //4
 var index = $(this).attr('index');
 $('img').eq(stt).removeClass('active');
 $('span').eq(stt).removeClass('active');

 //add class active of img & li index next
 $('img').eq(index).addClass('active');
 $('span').eq(index).addClass('active');
 startSlide();
 });
 });*/

function showSlide(checkNext) {
    var interval;
    var index = 0;
    $('.mySlides img').each(function (idx) {
        if ($(this).hasClass('active')) {
            index = idx;
            return true;
        }
    });
    if (checkNext != undefined && checkNext == false) {
        index = ((index - 1) < 0) ? $('.mySlides img').length - 1 : index - 1;
    } else {
        index = ($('.mySlides img').length == (index + 1)) ? 0 : index + 1;
    }
    $('.mySlides img').removeClass('active');
    $('.mySlides img:eq(' + index + ')').addClass('active');

    $('.bot span').removeClass('active');
    $('.bot span:eq(' + index + ')').addClass('active');
}
function initSlider() {
    interval = setInterval(function () {
        showSlide();
    }, 5000);

    $('#next').on('click', function () {
        showSlide();
    });

    $('#prev').on('click', function () {
        showSlide(false);
    });

    $('#btnPause').on('click', function () {
        $('#btnPause').addClass('hide');
        $('#btnPlay').removeClass('hide');
        clearInterval(interval);
    });

    $('#btnPlay').on('click', function () {
        $('#btnPlay').addClass('hide');
        $('#btnPause').removeClass('hide');
        interval = setInterval(function () {
            showSlide();
        }, 5000);
    });

    $('span').on('click', function () {
        var stt = $('img.active').attr('stt');
        var index = $(this).attr('index');
        $('.mySlides img').eq(stt).removeClass('active');
        $('.bot span').eq(stt).removeClass('active');

        $('.mySlides img').eq(index).addClass('active');
        $('.bot span').eq(index).addClass('active');
    });
}
$(document).ready(function () {
    initSlider();
});
