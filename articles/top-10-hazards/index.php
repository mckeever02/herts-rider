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
            <p><? echo $page_issue2[''.$page_id.'']['blurb'];?></p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container">

          <div class="longform-text-container">

            <p class="introduction">There are loads of potential problems to deal with when you’re on your bike. These are 10 of the most common Tarmac terrors. Remember, forewarned is forearmed...</p>

          </div><!-- /longform-text-container -->
        </section>

        <section class="container step-timeline wow fadeInUp">

           <!-- Step -->
           <?php foreach($top10_hazards_steps as $item) {
            echo
            "<div class=\"step-timeline-block\">
                <div class=\"step-timeline-step\">
                    <span>{$item['step']}</span>
                </div>

                <div class=\"step-timeline-content\">
                    <h3>{$item['title']}</h3>
                    <p>{$item['content']}</p>
                </div>
            </div>";
            } ?>

        </section>
        
        <section class="container">
          <div class="imgix-fluid-bg imgix-image" style="padding-bottom:30%;" data-src="https://herts-rider.imgix.net/ads/inline-ads/herts-bikes-banner.jpg" alt="Herts Bikes"></div>
        </section>


        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
