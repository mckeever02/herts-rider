  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- MODERNIZR -->
  <script src="<?= $path;?>/js/min/modernizr-ck.js"></script>

  <!-- MAIN -->
  <script src="<?= $path;?>/js/min/main-min.js"></script>

  <!-- IMGIX -->
  <script src="<?= $path;?>/js/imgix.js"></script>
  <script>
      /* imgix.fluid() optional parameters */
      var bgOptions = {
        fluidClass: 'imgix-fluid-bg',
        updateOnResizeDown: true,
        updateOnResize: true,
        // updateOnPinchZoom: true,
        pixelStep: 10,
        autoInsertCSSBestPractices: true,
        lazyLoad: true,
        lazyLoadOffsetVertical: -100,
        onChangeParamOverride: function(w, h) {
           /* Override and insert additional imgix parameters*/
           /* Currently displaying information about the image size and dpr */
          var dpr = Math.ceil(window.devicePixelRatio*10) /10;
          return {
            "fit": "crop"
          };
        }
      };
      imgix.onready(function() {
        imgix.fluid(bgOptions);
      });
  </script>

  <!-- VIDEO.JS -->
  <script src="//vjs.zencdn.net/4.12/video.js"></script>

  <!-- DRAWER MENU -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.1/iscroll-min.js"></script>
  <script src="//cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.1/dropdown.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/drawer/2.4.0/js/jquery.drawer.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".drawer").drawer();
    });
  </script>

  <!-- FLEXSLIDER -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/flexslider/2.3.0/jquery.flexslider-min.js"></script>
  <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "fade",
        slideshow: false,
        prevText: "",
        nextText: ""

      });
    });
  </script>

<!-- WOW -->
<script src="//cdn.jsdelivr.net/wow/1.1.2/wow.min.js"></script>
<script>
    var wow = new WOW(
        {
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
            callback: function(box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            }
        }
    );
    wow.init();
</script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-64504361-1', 'auto');
  ga('send', 'pageview');
</script>