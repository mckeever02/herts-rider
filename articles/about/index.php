<!-- Set the Page ID -->
<?php $page_id = 1; ?>

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
            <p><? echo $page_issue2[''.$page_id.'']['blurb'];?></p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

            <div class="row">
                <div class="one-half column">
                <p class="introduction large-text">I’ve been riding bikes for pretty much as long as I can remember and I still love it today!</p>
                <p> I started with motocross when I was six and then I took to the track from the age of 12. Now I’m 24, a BSB Champion and riding in the World Superbike Championship with Voltcom Crescent Suzuki.</p>
                </div>
                <div class="one-half column">
                <div class="imgix-fluid-bg imgix-image" style="padding-bottom:64%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/alex-lowes.jpg" alt="Alex Lowes"></div>
                </div><!-- /one-half column -->
            </div>

            <div class="row wow fadeIn">
                 <div class="imgix-fluid-bg imgix-image" style="padding-bottom:40%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/alex-bike.jpg" alt="Alex Lowes"></div>

            </div>

            <div class="longform-text-container wow slideInLeft">
                <blockquote>
                    <p>Whatever you do on two wheels, you need to do things right. Hertfordshire Rider tells you everything you need to know whether it’s about how to sharpen up your riding skills, what the top new products are that you can buy, where to go for the best insurance deals or how to maintain or secure your bike. It’s all in here!</p>
                </blockquote>
            </div>

            <div class="row wow fadeInUp">
               <div class="one-half column">
                    <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/alex-bike-2.jpg" alt="Alex Lowes"></div>

               </div>
               <div class="one-half column">
                    <p>I’m a racer, but whether you ride on track or on the road it is all about safety. It’s about the kit you wear when you ride – you want to be safe in case of a spill. It’s about the maintenance of your bike – it needs to be in tip-top condition when you’re out on the open road enjoying it. It’s also about the way you ride – like any racer, road-riding is about technique and experience, so the more you ride and the more experience and training you receive the better and safer rider you will be. You’ll find lots of information on all these subjects in Hertfordshire Rider.
</p>
            <p>Finally, I really believe that all the best experiences in motorcycling are shared, so hook up with a mate for a ride, or join your local bike group or training centre when you go looking for the best roads in Hertfordshire. Biking is to be enjoyed, savoured and shared – so get out there! </p>
              <p class="large-text">&dash; Alex Lowes, World Superbike racer and British Champion </p>
               </div>

            </div>




          </div><!-- /longform-text-container -->
        </section>

        <section class="container lined wow fadeInUp">
            <div class="longform-text-container">
                <h1>About Hertfordshire Rider</h1>
                <div class="four columns reset-margin-left"><img src="../../images/herts-logo.jpg" alt="Hertfordshire Council"></div>
                <div class="eight columns"><p class="introduction">This digital magazine is funded by Hertfordshire Council’s as a free source of information and advice for motorcyclists in around the county. Formerly titled Hertfordshire Biker and printed biannually, the magazine has evolved into a full digital publication with interactive content.</p></div>

                <div class="group">
                <p>We hope you’ll find it much easier to access and share articles, which you can now view on your computer, phone or tablet. If you haven’t done so already, subscribe for free by clicking the button at the top of the homepage and letting us know your email address and we'll notify you when new issues come out. Don't forget to share the magazine with your friends using email or social media; just point them to <a href="http://hertfordshirerider.co.uk" target="_blank">hertfordshirerider.co.uk</a></p>

            <p>Because Hertfordshire Rider is produced for you, tell us what you'd like to see in future editions by dropping us a line at any time on <a href="mailto:info@firstcar.co.uk">info@firstcar.co.uk</a> or call the office on <a href="tel:08451308853">08451 308 853</a>.</p>
            </div>



            </div>
        </section>



        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
