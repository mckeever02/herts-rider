<!-- Set the Page ID -->
<?php $page_id = 1; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p><? echo $page[''.$page_id.'']['blurb'];?></p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">Welcome to the summer edition of Hertfordshire Rider, produced to make sure you've got the most informative, interesting and topical content on motorcycling in and around Hertfordshire at your fingertips.</p>

            <p>Whether you’re a seasoned rider with thousands of miles under your belt or you're just thinking about getting on a bike for the first time, we're sure you'll find the features as enlightening as they are absorbing.</p>

            <p>If you’re not already involved with a club make sure you check out our <a href="../motorcycle-clubs-directory/">local clubs directory</a>. Biking should be a hugely social activity and by getting involved with a local group you can share your knowledge and benefit from the experience of others too.</p>

            <p>Now that Hertfordshire Rider has gone digital it's even easier to access and share; you can view it on your computer, phone or tablet. If you haven’t done so already, subscribe for free by clicking the button at the top of the homepage and letting us know your email address and we'll notify you when new issues come out. Don't forget to share the magazine with your friends using email or social media; just point them to <a href="http://hertfordshirerider.co.uk">hertfordshirerider.co.uk</a></p>

            <p>Because Hertfordshire Rider is produced for you, tell us what you'd like to see in future editions by dropping us a line at any time on <a href="mailto:info@firstcar.co.uk">info@firstcar.co.uk</a> or call the office on <a href="tel:08451308853">08451 308 853</a>.</p>

          </div><!-- /longform-text-container -->
        </section>



        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
