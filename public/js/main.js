$(document).ready(function() {
    // Set jumbotron height to full height
    setJumbotronHeight();

    $(window).resize(function() {
        setJumbotronHeight();
    });

    // Smooth scroll
    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });

    $(".randomNumber").click(function(){
        var number = 1 + Math.floor(Math.random() * 1000);
        $("#number").text(number); 
    });
});

function setJumbotronHeight() {
    vpHeight = $(window).innerHeight();
    $('.jumbotron').innerHeight(vpHeight);
}