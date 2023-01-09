window.onload = function () {
    var stars = document.getElementsByClassName('star');

    for (var i = 0; i < stars.length; i++) {
        var star = stars[i];
        star.onmouseover = function (e) {
            this.classList.add('full-stars');
            var checkStar = this.getAttribute('data-rating');
            for (var a = 1; a <= checkStar; a++) {
                stars[a - 1].classList.add('full-stars');
            }
        };
        star.onmouseout = function (e) {
            var rating = this.getAttribute('data-rating');
            // if (document.getElementsByName('data_answer')[rating - 1].checked === false) {
                this.classList.remove('full-stars');
                for (var a = 1; a <= rating; a++) {
                    stars[a - 1].classList.remove('full-stars');
                }
            // }
        };
        star.onclick = function () {
            var rating = this.getAttribute('data-rating');
            document.getElementsByName('data_answer')[rating - 1].checked = true;
            this.classList.add('full-stars');
            // for (var a = 1; a <= rating; a++) {
            //     stars[a - 1].classList.add('full-stars');
            // }
            // var NoCheckStar = this.getElementsByClassName('full-stars');
            // for (var b = 1; b <= NoCheckStar; b++) {
            //     stars[b - 1].classList.remove('full-stars');
            // }
        }
    }
}

document.addEventListener('change', function () {
    var buttons = document.getElementById('pollSub');
    buttons.disabled = true;
    var answer_checker = document.getElementsByClassName('answer-checker');
    for (var b = 0; b < answer_checker.length; b++) {
        var answer = answer_checker[b];
        if (answer.checked) {
            buttons.disabled = false;
        }
    }
})

