function move(plus) {
    var elem = document.getElementById("myBar");
    var width = 0;
    var count_question = $('#count_question').val();
    var load_form = document.getElementById("load_form");
    console.log(load_form.value)
    console.log(count_question)
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
function click_handler(plus) {
    move(plus);
}
$(document).ready(function() {
    click_handler(false);
    // $(':input[type="submit"]').prop('disabled', true);
    // $('.contrain').on('change', 'input', function() {
    //     if($(this).val() !== '') {
    //         $(':input[type="submit"]').prop('disabled', false);
    //     }
    // });
    $('.contrain').on('click', '#poll-fr0', function () {
        click_handler(true);
    });
});




