
google.load('visualization', '1', {
    packages: [
        'line',
        'corechart'
    ]
});
var months_offset = 3;
var days_offset = 1;
var base = 'EUR';
get_rates();
function get_rates() {
    $.getJSON('http://api.fixer.io/latest?base=' + base, function (data) {
        base = data.base;
        $('table#mytable>tbody').html('');
        $('span#base_cur').html(base);
        $.each(data.rates, function (a, b) {
            $('#mytable>tbody').append('<tr> <td>' + a + '</td><td> ' + b + '</td> </tr>');
        });
        keys = Object.keys(data.rates).sort();
        $.each(keys, function (a, b) {
            $('#baseSelect').append('<option>' + b + '</option>');
        });
        $('body').show();
    });
}
$('#baseSelect').change(function () {
    base = this.value;
    $('#base_cur').html(base);
    get_rates();
});
$('#mytable>tbody').delegate('tr', 'click', function () {
    $('.loading').css('display', 'block');
    var cur = $(this).children('td:first').html();
    $('.title>span').html('(' + cur + ')');
    DrawChart(get_history(cur));
});
function get_history(cur) {

    var histo = [];
    var date_now = new Date();
    var date_from = new Date();
    date_from.setMonth(date_from.getMonth() - months_offset);
    while (date_from < date_now) {
        date_from.setDate(date_from.getDate() + days_offset);
        var date = date_from.toISOString().slice(0, 10);
        $.ajax({
            url: 'http://api.fixer.io/' + date + '/?base=' + base + '&symbols=' + cur,
            dataType: 'json',
            async: false,
            success: function (data) {
                var parts = data.date.split('-');
                var el = [new Date(parts[0], parts[1] - 1, parts[2]), data.rates[cur]];
                console.log(el);
                histo.push(el);
            }
        });
    }
    return histo;
}
function DrawChart(data) {
    var content = new google.visualization.DataTable();
    content.addColumn('date', 'Date');
    content.addColumn('number', 'Rate');
    $.each(data, function (a, b) {
        content.addRow(b);
    });
    var options = {
        legend: {position: 'bottom'},
        width: 800,
        height: 300,
        axes: {
            x: {
                0: {side: 'bottom'}
            }
        },
        hAxis: {
            title: 'Rates',
            viewWindowMode: 'pretty',
            slantedText: true,
            textPosition: 'in'
        },
        vAxis: {
            title: 'Date',
            baseline: 0,

        },
    };
    var formatter1 = new google.visualization.DateFormat({formatType: 'medium'});
    var formatter2 = new google.visualization.NumberFormat({fractionDigits: 4});
    formatter1.format(content, 0);
    formatter2.format(content, 1);


    $('.loading').css('display', 'none'); //Hide loader

    var chart = new google.charts.Line(document.getElementById('chart'));
    chart.draw(content, options);
}