
// Activate equal heights
$('#index').fadeIn('slow');

$(window).load(function () {

    equalheight('.index > div');
});


$(window).resize(function () {
    equalheight('.index > div');
});

// Create a tooltip from the title attribute on hover within the SVG
$(window).load(function () {
    $(".country")
        .on("mouseenter", function () {
            var title = $(this).attr("title");
            var link = $(this).attr("xlink:href");
            var tooltip = "<div class='tooltip'><a href='" + link + "' title='" + title + "'>" + title + "</a></div>";
            $(".map-container").append(tooltip);

        })

        .on("mouseleave", function () {
            $(".tooltip").remove();
        });

});

// Scroll to anchor link

$("#countries-link").click(function(e) {
    e.preventDefault();

    // Scroll to step-two container
    $('html, body').animate({
        scrollTop: $('#countries').offset().top
    }, 1200);
});

$("#about-link").click(function(e) {
    e.preventDefault();

    // Scroll to step-two container
    $('html, body').animate({
        scrollTop: $('#about').offset().top
    }, 1200);
});

var country = "Germany";

$(document).ready(function(){
if($('.country').attr('title') == country) {
    $('.country').addClass('selected');
};
});