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
});

function setJumbotronHeight() {
    vpHeight = $(window).innerHeight();
    $('.jumbotron').innerHeight(vpHeight);
}