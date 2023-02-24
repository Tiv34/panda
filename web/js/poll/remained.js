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
    elem.style.width = width + '%';
}

function click_handler(plus) {
    move(plus);
}

function valthisform() {
    var checkboxs = document.getElementsByName("data_answer");
    var okay = false;
    for (var i = 0, l = checkboxs.length; i < l; i++) {
        if (checkboxs[i].checked) {
            okay = true;
            break;
        }
    }
    return okay;
}

click_handler(false);
// document.getElementById("poll-fr0").addEventListener("click", click_handler, true);
document.getElementById("poll-fr0").addEventListener("click", function () {
    console.log(valthisform())
    click_handler(true);
}, {once: false});
// window.addEventListener("load", click_handler, false);
// window.addEventListener("onload", click_handler, false);


