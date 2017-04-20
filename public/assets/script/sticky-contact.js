$(".information").click(function() {
    $(".moyen").removeClass("hide");
    $(".stickyGlobal").addClass("bgMoyen");
    $(".information").addClass("hide");
    $(".close").removeClass("hide");
});

$(".introTel").click(function() {
    $(".telephoneForm").toggleClass("hide");
    $(".flecheTel").toggleClass("arrow_carrot-down");
    $(".flecheTel").toggleClass("arrow_carrot-right");
});

$(".introMessage").click(function() {
    $(".messageForm").toggleClass("hide");
    $(".stickyGlobal").toggleClass("bgGrand");
    $(".moyen").toggleClass("grand");
    $(".flecheMessage").toggleClass("arrow_carrot-down");
    $(".flecheMessage").toggleClass("arrow_carrot-right");
});

$(".close").click(function() {
    $(".moyen").addClass("hide");
    $(".stickyGlobal").removeClass("bgMoyen");
    $(".stickyGlobal").removeClass("bgGrand");
    $(".telephoneForm").addClass("hide");
    $(".messageForm").addClass("hide");
    $(".moyen").removeClass("grand");
    $(".close").addClass("hide");
    $(".information").removeClass("hide");
});