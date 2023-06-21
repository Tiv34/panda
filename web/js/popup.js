$(document).ready(function () {
    $("a.myLinkModal").click(function (event) {
        event.preventDefault();
        var id_guest = $(this).attr('data-id-guest');
        var open_guest = $(".myModal[data-id='" + id_guest + "']");
        console.log(id_guest)
        console.log(open_guest);
        $(".myOverlay").fadeIn(297, function () {
            open_guest
                .css("display", "block")
                .animate({ opacity: 1 }, 198);
        });
    });

    $(".myModal__close, .myOverlay").click(function () {
        $(".myModal").animate({ opacity: 0 }, 198, function () {
            $(this).css("display", "none");
            $(".myOverlay").fadeOut(297);
        });
    });
});