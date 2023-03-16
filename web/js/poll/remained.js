function move(plus) {
    var elem = document.getElementById("myBar");
    var width = 0;
    var load_form = document.getElementById("load_form");
    if (document.getElementById("count_question").value !== "0") {
        width = Math.round(100 / (document.getElementById("count_question").value));
    }
    var plus_fr = Number(load_form.value);
    if (plus) {
        plus_fr = Number(load_form.value) + 1;
    }
    width = plus_fr * Number(width);
    if (width > 100) {
        elem.style.width = '100%';
    } else {
        elem.style.width = width + '%';
    }
}

function click_handler(plus, time) {
    setTimeout(function () {
        move(plus);
    }, time);
}

function click_plus(time) {
    setTimeout(function () {
        var data = $('#poll-form').serialize();
        $.ajax({
            url: 'poll-answer',
            method: 'post',
            dataType: 'json',
            data: {data},
            success: function (data) {
                $('.procent-answer').each(function (i, obj) {
                    let id = $(obj).attr('data-percent')
                    if (typeof data[id] === "undefined") {
                        $(obj).html('0%')
                    } else {
                        $(obj).html(data[id] + '%');
                    }
                });
            }
        });
    }, time);
}
$(document).ready(function () {
    click_handler(false, 0);
    click_plus(0);
    $('.contrain').on('click', '#poll-fr0', function () {
        click_plus(500);
        click_handler(true, 400);
    }).on('click', 'input', function () {
        click_plus(0);
    })
});





