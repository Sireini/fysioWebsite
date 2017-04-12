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

    function stringGen(len){
        var text = " ";
        
        var charset = "abcdefghijklmnopqrstuvwxyz0123456789";
        
        for( var i=0; i < len; i++ )
            text += charset.charAt(Math.floor(Math.random() * charset.length));
        
        return text;
    }

    $('.generateToken').click(function(){
        console.log(stringGen(5));
        $('.showToken').val(stringGen(5));
    });

});

function setJumbotronHeight() {
    vpHeight = $(window).innerHeight();
    $('.jumbotron').innerHeight(vpHeight);
}