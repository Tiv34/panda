$(document).ready(function() {
    var colorBox = {
        1: "#9f785f",
        2: "#c69fdc",
        3: "#c3d586",
        4: "#fc649b",
        5: "#75befd",
        6: "#c47afa",
        8: "#f8d785",
        7: "#fca7c8",
        9: "#f88e77",
    }
    $("#btnSubmit-ret").click(function(){
       var id_block = parseInt($('.image-about.active').attr("data-id")) - 1;
       if (id_block === 0) {
           id_block = 9;
       }
        var block_show = $(".about-block").find("[data-id='" + id_block + "']");
        var block_hide = $(".about-block").find(".active");

        block_hide.removeClass("active");
        block_show.addClass("active");

        setTimeout(function () {
            $('.img-shadow-2').css("background-color", colorBox[id_block]);
            $('.img-shadow').css("background-color", colorBox[id_block]);
        }, 100);
    });
    $("#btnSubmit-av").click(function(){
        var id_block = parseInt($('.image-about.active').attr("data-id")) + 1;
        if (id_block > 9) {
            id_block = 1;
        }
        var block_show = $(".about-block").find("[data-id='" + id_block + "']");
        var block_hide = $(".about-block").find(".active");

        block_hide.removeClass("active");
        block_show.addClass("active");

        setTimeout(function () {
            $('.img-shadow-2').css("background-color", colorBox[id_block]);
            $('.img-shadow').css("background-color", colorBox[id_block]);
        }, 100);
    });
});