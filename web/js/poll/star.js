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
            this.classList.remove('full-stars');
            var checkStar = this.getAttribute('data-rating');
            for (var a = 1; a <= checkStar; a++) {
                stars[a - 1].classList.remove('full-stars');
            }
        };
        star.onclick = function () {
            var rating = this.getAttribute('data-rating');
            document.getElementsByName('rating')[rating - 1].checked = true;

            this.classList.add('full-stars');
            var checkStar = this.getAttribute('data-rating');
            for (var a = 1; a <= checkStar; a++) {
                stars[a - 1].classList.add('full-stars');
            }

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

