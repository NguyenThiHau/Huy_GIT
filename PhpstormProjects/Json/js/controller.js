$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "http://localhost/PhpstormProjects/Json/data/apartment.json",
        success: function (data) {
            console.log(data);
            var rs = '';
            rs += '<tr>';
            rs += '<td rowspan="17" class="item-1">' + data.mapwidth + '</td>';
            rs += '<td rowspan="17" class="item-2">' + data.mapheight + '</td>';
            for (var x = 0; x < data.categories.length; x++) {
                var data1 = data.categories[x];
                rs += '<td rowspan="17" class="item-3">' + data1.id + '</td>';
                rs += '<td rowspan="17" class="item-4">' + data1.title + '</td>';
                rs += '<td rowspan="17" class="item-5">' + data1.color + '</td>';
                rs += '<td rowspan="17" class="item-6">' + data1.show + '</td>';
            }
            for (var y = 0; y < data.levels.length; y++) {
                var data2 = data.levels[y];
                rs += '<td rowspan="7" class="item-7">' + data2.id + '</td>';
                rs += '<td rowspan="7" class="item-8">' + data2.title + '</td>';
                rs += '<td rowspan="7" class="item-9">' + data2.map + '</td>';
                rs += '<td rowspan="7" class="item-10">' + data2.minimap + '</td>';
                for (var k = 0; k < data2.locations.length; k++) {
                    var data3 = data2.locations[k];
                    rs += '<td class="item-11">' + data3.id + '</td>';
                    rs += '<td class="item-12">' + data3.title + '</td>';
                    rs += '<td class="item-13">' + data3.about + '</td>';
                    rs += '<td class="item-14">' + data3.description + '</td>';
                    rs += '<td class="item-15">' + data3.category + '</td>';
                    rs += '<td class="item-16">' + data3.link + '</td>';
                    rs += '<td class="item-17">' + data3.x + '</td>';
                    rs += '<td class="item-18">' + data3.y + '</td>';
                    rs += '<td class="item-19">' + data3.zoom + '</td>';
                    rs += '</tr>';
                }
            }
            $('#jsontable tbody').html(rs);
        },
        error: function (xhr) {
            console.error(xhr.message);
        }
    });
});
