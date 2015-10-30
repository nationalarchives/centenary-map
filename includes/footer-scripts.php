<!--[if (gte IE 6)&(lte IE 8)]>
<script src="http://livelb.nationalarchives.gov.uk/wp-content/themes/tna/scripts/jquery-1.10.2.min.js"></script>
<script src="http://livelb.nationalarchives.gov.uk/wp-content/themes/tna/scripts/jquery-migrate-1.0.0.js"></script>
<![endif]-->

<!--[if gte IE 9]><!-->
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/jquery-2.0.3.min.js"></script>
<!--<![endif]-->


<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/backstretch.js"></script>

<script src="/js/jquery-ui.min.js"></script>

<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/tna-definitions.js"></script>
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/tna-bindings.js"></script>
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/tna-run-on-page-load.js"></script>


<script src="http://www.nationalarchives.gov.uk/scripts/footer-img.js" type="text/javascript"></script>


<script type='text/javascript'
        src='http://www.nationalarchives.gov.uk/wp-content/themes/tna/js/navigation.js?ver=20120206'></script>
<script type='text/javascript'
        src='http://www.nationalarchives.gov.uk/wp-content/themes/tna/js/skip-link-focus-fix.js?ver=20130115'></script>
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/tabify.js"></script>
<script src="http://www.nationalarchives.gov.uk/wp-content/themes/tna/scripts/jQuery.equalHeights.js"></script>
<script>

    $('#index').fadeIn('slow');

    $(window).load(function() {

        equalheight('.index > div');
    });


    $(window).resize(function(){
        equalheight('.index > div');
    });

    $(window).load(function () {
         $(".country")
            .on("mouseenter",function() {
                var a = $(this).attr("title");
                var tooltip = "<div class='tooltip'>" + a + "</div>";
                $(".map-container").append(tooltip);
                $(".tooltip").css({position:"absolute", top:"30%", left: "45%"});
            })

            .on("mouseleave",function() {
                $(".tooltip").remove();
            });

    });

</script>