<!--start footer-->
<footer id="footer">

  <!--start container-->
  <div class="container clearfix">

    <div class="grid_3 gridfooter">
      <h3>LOVE TRAVEL</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu lorem, mattis quis convallis ac</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu lorem, mattis quis convallis ac</p>
    </div>

    <div class="grid_3 gridfooter">
      <h3>CONTACTS</h3>
      <p>Address: Broadway Road 234 - 35127<br />Phone: +001 3072341187<br />Mail: info@lovetravel.com</p>
      <p class="socialfooter"><a href="#"><img alt="" src="<?php bloginfo("template_url"); ?>/img/footer/facebook.jpg" /></a><a href="#"><img alt="" src="<?php bloginfo("template_url"); ?>/img/footer/dribble.jpg" /></a><a href="#"><img alt="" src="<?php bloginfo("template_url"); ?>/img/footer/twitter.jpg" /></a><a href="#"><img alt="" src="<?php bloginfo("template_url"); ?>/img/footer/instagram.jpg" /></a><a href="#"><img alt="" src="<?php bloginfo("template_url"); ?>/img/footer/google.jpg" /></a></p>
    </div>

    <div class="grid_3 gridfooter">
      <h3>TWEET</h3>

      <div id="tweets"></div>

    </div>

    <div class="grid_3 gridfooter">
      <h3>NEWSLETTER</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu lorem, mattis quis convallis ac</p>

      <!--start form-->
      <form class="newsletterfooter">
        <input type="text" />
        <input type="submit" />
      </form>
      <!--end form-->

    </div>

  </div>
  <!--end container-->

</footer>
<!--end footer-->

<!--start copyright-->
<section id="copyright">

  <!--start container-->
  <div class="container">

    <div class="grid_12">
      <p>© Copyright 2013 by Nicdark - All Rights Reserved</p>
    </div>

  </div>
  <!--end container-->

  <div class="backtotop">
    <a href="#startpage"><img alt="" src="<?php bloginfo("template_url"); ?>/img/footer/arrowbacktotop.png" /></a>
  </div>

</section>
<!--end copyright-->
<!--Start js-->
<script src="<?php bloginfo("template_url"); ?>/js/jquery.min.js"></script> <!--Jquery-->
<script src="<?php bloginfo("template_url"); ?>/js/jquery-ui.js"></script> <!--Jquery UI-->
<script src="<?php bloginfo("template_url"); ?>/js/excanvas.js"></script> <!--canvas need for ie-->
<script src="<?php bloginfo("template_url"); ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!--rev slider-->
<script src="<?php bloginfo("template_url"); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> <!--rev slider-->
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/showbizpro/js/jquery.themepunch.plugins.min.js"></script> <!--showbiz-->
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/showbizpro/js/jquery.themepunch.showbizpro.min.js"></script> <!--showbiz-->
<script src="<?php bloginfo("template_url"); ?>/js/scroolto.js"></script> <!--Scrool To-->
<script src="<?php bloginfo("template_url"); ?>/js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
<script src="<?php bloginfo("template_url"); ?>/js/jquery.easy-pie-chart.js"></script> <!--Chart-->
<script src="<?php bloginfo("template_url"); ?>/js/fancybox/jquery.fancybox.js"></script> <!--main fancybox-->
<script src="<?php bloginfo("template_url"); ?>/js/fancybox/jquery.fancybox-thumbs.js"></script> <!--fancybox thumbs-->
<script src="<?php bloginfo("template_url"); ?>/js/jquery.inview.min.js"></script> <!--inview-->
<script src="<?php bloginfo("template_url"); ?>/js/menu/hoverIntent.js"></script> <!--superfish-->
<script src="<?php bloginfo("template_url"); ?>/js/menu/superfish.min.js"></script> <!--superfish-->
<script src="<?php bloginfo("template_url"); ?>/js/menu/tinynav.min.js"></script> <!--tinynav-->
<script src="<?php bloginfo("template_url"); ?>/js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
<script src="<?php bloginfo("template_url"); ?>/js/settings.js"></script> <!--settings-->
<!--End js-->

<script type='text/javascript'>
    /* <![CDATA[ */


    //start carousel
    jQuery(document).ready(function() {

        jQuery('.showbiz-container').showbizpro({
            dragAndScroll:"on",
            visibleElementsArray:[4,3,2,1]
        });

    });
    //end carousel


    //start tour
    $(document).ready(function(){

        var qnthometour = $('.hometour').length;


        setInterval(function(){

            i=0;

            while ( i < qnthometour ){

                //title and img hometours height
                var titleimghometourheight = $(".hometour-"+i+" .titleimghometour").height();
                var datedayhometourheight = $(".hometour-"+i+" .datedayhometour").height();

                $(".hometour-"+i+" .descriptionhometour").css({
                    "height": titleimghometourheight - datedayhometourheight
                });

                //tabshometourheight
                var tabshometourheight = $(".hometour-"+i+" .tabshometour").height();
                var footerhometourheight = $(".hometour-"+i+" .footerhometour").height();

                $(".hometour-"+i+" .listhometour").css({
                    "height": tabshometourheight - footerhometourheight
                });

                i++;
            }

        }, 0);

    });
    //end tour


    //start tab and tooltip
    $(document).ready(function() {
        $(".hometabs").tabs();
        $( ".hometabs, .tooltip" ).tooltip({ position: { my: "top+0 top-75", at: "center center" } });
    });
    //end tab and tooltip


    //start scroll
    $(document).ready(function() {
        //description hometour
        $(".descriptionhometour").niceScroll({
            touchbehavior:false,
            cursorcolor:"#EBEEF2",
            cursoropacitymax:0.9,
            cursorwidth:3,
            autohidemode:true,
            cursorborder:"0px solid #2848BE",
            cursorborderradius:"0px"

        });

        //list home tour
        $(".listhometour, .listarchivedestination").niceScroll({
            touchbehavior:true,
            cursorcolor:"#EBEEF2",
            cursoropacitymax:0.9,
            cursorwidth:3,
            autohidemode:true,
            cursorborder:"0px solid #2848BE",
            cursorborderradius:"0px"

        });
    });
    //end scroll


    //start fancybox
    $(document).ready(function(){

        $('.fancybox-thumbs').fancybox({
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : true,
            arrows    : true,
            nextClick : true,

            helpers : {
                thumbs : {
                    width  : 50,
                    height : 50
                }
            }
        });

    });
    //end fancybox


    /* ]]> */
</script>

<?php wp_footer(); ?>
</body>
</html>