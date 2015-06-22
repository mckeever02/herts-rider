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

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop&crop=right" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p>A guide to getting on 4 wheels</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">
        <section class="container step-timeline">

           <!-- Step -->
           <?php foreach($learning_journey_steps as $item) {
            echo
            "<div class=\"step-timeline-block\">
                <div class=\"step-timeline-step\">
                    <span>{$item['step']}</span>
                </div>

                <div class=\"step-timeline-content\">
                    <p class=\"subheading\">Step {$item['step']}</p>
                    <h3>{$item['title']}</h3>
                    <p>{$item['content']}</p>
                    <div class=\"u-left\">
                        <a href=\"{$item['url']}\" target=\"_blank\" class=\"button button-secondary button-small button-icon button-visit\">More info</a>
                    </div>
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
