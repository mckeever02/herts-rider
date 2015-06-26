<!-- Set the Page ID -->
<?php $page_id = 6; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="Herts Rider">

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

            <p class="introduction">There are loads of potential problems to deal with when you’re on your bike. These are 10 of the most common Tarmac terrors. Remember, forewarned is forearmed...</p>

          </div><!-- /longform-text-container -->
        </section>

        <section class="container step-timeline">

           <!-- Step -->
           <?php foreach($learning_journey_steps as $item) {
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


        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
