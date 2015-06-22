<!-- Set the Page ID -->
<?php $page_id = 10; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>
  
  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop&crop=center" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <p class="subheading">Making the most of</p>
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p>Instead of having a lesson or two each week and spreading it over several weeks or months, you can cram the whole learning process into a much shorter period - typically a week.</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">While these intensive courses allow you to get everything out of the way quickly, experience counts for a lot when learning to drive - and there's only so much of that you can gain in a week.</p>

            <p class="u-cf">Research shows that, on average, those who pass have had 47 hours of lessons and 22 hours of private practice. You really need to practice in a variety of conditions, but if you do take the intensive driving course route, make sure you're properly prepared or you'll end up throwing all your money away.</p>
          </div><!-- /longform-text-container -->

        </section>

        <section class="container">
          <h2 class="u-text-center">Before Booking</h2>
          <div class="row">
               <div class="one-third column wow fadeInLeft" data-wow-delay="0.5s">
                  <div class="u-text-center list-number-box">
                    <span class="circle-container">1</span>
                    <p>Check you've got your provisional licence.</p>
                  </div>
               </div>

               <div class="one-third column wow fadeInLeft" data-wow-delay="1s">
                   <div class="u-text-center list-number-box">
                      <span class="circle-container">2</span>
                      <p>Ensure you've passed your theory and hazard perception tests.</p>
                   </div>
               </div>

               <div class="one-third column wow fadeInLeft" data-wow-delay="1.5s">
                   <div class="u-text-center list-number-box">
                       <span class="circle-container">3</span>
                       <p>Don't assume you'll pass your test after a week; you can still fail. The best schools will give you an assessment session before you book, to gauge your ability.</p>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="one-third column wow fadeInLeft" data-wow-delay="0.5s">
                   <div class="u-text-center list-number-box">
                       <span class="circle-container">4</span>
                       <p>Check the driving school has booked you a test for the end of the course; some just hope there's a cancellation thay can grab.</p>
                    </div>
               </div>

               <div class="one-third column wow fadeInLeft" data-wow-delay="1s">
                   <div class="u-text-center list-number-box">
                       <span class="circle-container">5</span>
                       <p>Expect to pay £800-1200 for the whole course, including the test fee.</p>
                     </div>
               </div>
           </div>
        </section>

        <section class="container">
          <a href="http://www.bsm.co.uk/" target="_blank"><div class="imgix-fluid-bg imgix-image" style="padding-bottom:25%;" data-src="https://firstcar.imgix.net/ads/inline-ads/BSM-banner.jpg" alt="Don't forget to book your BSM lessons now"></div></a>
        </section>

        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
