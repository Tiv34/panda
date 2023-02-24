window.onload = function () {
    var stars = document.getElementsByClassName('star');
    for (var i = 0; i < stars.length; i++) {
        var star = stars[i];
        star.onclick = function () {
            var elems = document.querySelectorAll(".full-stars");
            [].forEach.call(elems, function(el) {
                el.classList.remove("full-stars");
            });
            var checkStar = this.getAttribute('data-rating');
            for (var b = 1; b <= stars.length; b++) {
                document.getElementsByTagName("data_answer")[b - 1].removeAttribute("checked");
            }
            this.classList.remove('full-stars');
            var rating = this.getAttribute('data-rating');
            document.getElementsByName('data_answer')[rating - 1].setAttribute('checked', 'checked')
            this.classList.add('full-stars');
            for (var a = 1; a <= checkStar; a++) {
                stars[a - 1].classList.add('full-stars');
            }
        }
    }
}

