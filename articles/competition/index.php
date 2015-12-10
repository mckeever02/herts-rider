<!-- Set the Page ID -->
<?php $page_id = 7; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="Herts Rider">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page_issue2[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <h1><? echo $page_issue2[''.$page_id.'']['title'];?></h1>
            <p class="blurb"><? echo $page_issue2[''.$page_id.'']['blurb'];?></p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container">

          <div class="longform-text-container">
            <div class="row">
              <p class="introduction">Hertfordshire Rider has teamed up with <a href="http://www.bikestop.co.uk">Bike Stop</a> to give you the chance to win GoPro’s smallest action camera yet – the Hero4 Session.</p>
            </div><!-- /row -->

            <p>Capable of capturing high-resolution 1440p30 and 1080p60 video, there’s even a 720p100 option that enables you to capture everything in pin-sharp slow motion.</p>

            <div class="row">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/gopro-image1.jpg" alt="Go Pro"></div>
            </div><!-- /row -->

          <p>Waterproof, shockproof and able to deliver still photos at the rate of 10 frames per second, the Hero4 Session can be controlled via just one button. With built-in wi-fi and Bluetooth, you can even control the Hero4 Session via an app on your smartphone.</p>

          <p>Packing a pair of microphones and able to automatically deal with low light so you don’t have to think about it, the Hero4 Session is a miracle of technology in one tiny package. For the full SP, just log on to the <a href="https://shop.gopro.com/EMEA/cameras/hero4-session/CHDHS-101-EU.html">official GoPro page</a> to find out more about what the Hero4 Session can do.</p>

          <div class="row">
            <img class="u-center-table" src="../../images/bikestop-logo.gif" alt="Bike Stop Logo">
          </div>

          <div class="container-margin-top">


          <p>Started in 1981, Stevenage-based Bike Stop stocks the best-quality protective gear on the market. Catering for all budgets, Bike Stop sells brands such as Rukka, RST, Belstaff, Shoei, AGV, Givi, Abus, Autocom, GoPro and more.</p>

          <p>All Bike Stop staff are regularly trained and excel in knowing all there is to know about the latest high-tech developments such as air-bag suits and jackets.</p>

          <p>Bike Stop has seven showrooms over two floors with air conditioning, and customer seating inside and out. But it isn’t just a shop however – it’s also a very popular biker's ride-out and meeting place with its own parking, free Lavazza whole-bean coffee and cakes. So make sure you stop by very soon.</p>

          </div><!--/margin-top-container  -->

          </div><!-- /longform-text-container -->


          <div class="row">
            <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/gopro-image2.jpg" alt="Go Pro image 2"></div>
          </div>

          <div class="longform-text-container container-margin-top">
            <h4>The T's &amp; C's</h4>
            <ul>
              <li>This competition is run by FirstCar Limited and Bike Stop Limited.</li>
              <li>Entries must be received by midnight on 1 May 2016 after which the winner will be randomly selected.</li>
            </ul>
          </div>

        </section>





        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
