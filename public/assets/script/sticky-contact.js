$('form').submit(function(e) {
    e.preventDefault();
});

$(".information").click(function() {
    $(".moyen").removeClass("hide");
    $(".stickyGlobal").addClass("bgMoyen");
    $(".information").addClass("hide");
    $(".close").removeClass("hide");
});

$(".introTel").click(function() {
    $(".telephoneForm").toggleClass("hide");
    $(".messageForm").addClass("hide");
    $(".stickyGlobal").removeClass("bgGrand");
    $(".moyen").removeClass("grand");
    $(".flecheMessage").removeClass("arrow_carrot-down");
    $(".flecheMessage").addClass("arrow_carrot-right");
    $(".flecheTel").toggleClass("arrow_carrot-down");
    $(".flecheTel").toggleClass("arrow_carrot-right");
    $(".reponseMessage").addClass("hide");
});

$(".introMessage").click(function() {
    $(".telephoneForm").addClass("hide");
    $(".messageForm").toggleClass("hide");
    $(".stickyGlobal").toggleClass("bgGrand");
    $(".moyen").toggleClass("grand");
    $(".flecheTel").removeClass("arrow_carrot-down");
    $(".flecheTel").addClass("arrow_carrot-right");
    $(".flecheMessage").toggleClass("arrow_carrot-down");
    $(".flecheMessage").toggleClass("arrow_carrot-right");
    $(".reponseTel").addClass("hide");
});

$(".close").click(function() {

    $(".moyen").addClass("hide");
    $(".reponseMessage").addClass("hide");
    $(".reponseTel").addClass("hide");
    $(".flecheTel").removeClass("arrow_carrot-down");
    $(".flecheTel").addClass("arrow_carrot-right");
    $(".stickyGlobal").removeClass("bgMoyen");
    $(".stickyGlobal").removeClass("bgGrand");
    $(".flecheMessage").removeClass("arrow_carrot-down");
    $(".flecheMessage").addClass("arrow_carrot-right");
    $(".telephoneForm").addClass("hide");
    $(".messageForm").addClass("hide");
    $(".moyen").removeClass("grand");
    $(".close").addClass("hide");
    $(".information").removeClass("hide");
});