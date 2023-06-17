$(document).ready(function() {
    if (parseInt($('.image-about.active').attr("data-id")) === 1) {
        $("#btnSubmit-ret").hide();
    }
    $("#btnSubmit-ret").click(function(){
        $("#btnSubmit-av").show();
        var id_block = parseInt($('.image-about.active').attr("data-id")) - 1;
        if (parseInt($('.image-about.active').attr("data-id")) === 2) {
            $("#btnSubmit-ret").hide();
        }
        if (id_block === 0) {
           id_block = 9;
       }
        var part = {
            1:1,
            2:1,
            3:1,
            4:2,
            5:3,
            6:4,
            7:5,
            8:6,
            9:7,
        };
        var block_show = $(".about-block").find("[data-id='" + id_block + "']");
        var block_hide = $(".about-block").find(".active");
        var height_title_show = $(".height-title[data-slide='" + part[id_block] + "']");
        block_hide.removeClass("active");
        height_title_show.addClass("active");
        block_show.addClass("active");

    });
    $("#btnSubmit-av").click(function(){
        $("#btnSubmit-ret").show();
        var id_block = parseInt($('.image-about.active').attr("data-id")) + 1;
        if (parseInt($('.image-about.active').attr("data-id")) === 8) {
            $("#btnSubmit-av").hide();
        }
        var part = {
            1:1,
            2:1,
            3:1,
            4:2,
            5:3,
            6:4,
            7:5,
            8:6,
            9:7,
        };
        if (id_block > 9) {
            id_block = 1;
        }
        var block_show = $(".about-block").find("[data-id='" + id_block + "']");
        var block_hide = $(".about-block").find(".active");
        var height_title_show = $(".height-title[data-slide='" + part[id_block] + "']");
        block_hide.removeClass("active");
        height_title_show.addClass("active");
        block_show.addClass("active");
    });
});