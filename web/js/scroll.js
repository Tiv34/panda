$(document).ready(function() {
    if (window.location.search) {
        let anchor = $('#guest-block');
        $('html, body').animate({
            scrollTop: $(anchor).offset().top
        }, 200);
    }
});
