<!-- Set the Page ID -->
<?php $page_id = 22; ?>

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
            <p class="subheading">Your guide to</p>
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p>If you’re to have any private practice, you’ll need a car. Thanks to learner insurance you might be able to use the family car – otherwise, you’ll have to buy something of your own.</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">It’s easy to feel intimidated at the thought of buying a car – whether it’s new or used. But don’t be put off, because if you do your homework and buy a great set of wheels, you’ll enjoy every minute of ownership.</p>
          </div>

          <blockquote class="u-cf">
            <span class="small-text footnote">Top Tip</span>
            <p>Before you buy any car, get an insurance quote to make sure you can afford the premiums. It's common for new drivers to buy an ultra-cheap old banger, only to find they can't get insurance cover for less than £6000 per year.</p>
          </blockquote>

          <div class="longform-text-container">
            <p>There’s a huge amount to consider though, such as whether you should buy new or used, what type of car you should buy and a whole load more...</p>

          </div>

          <div class="row">
            <div class="one-half column u-text-center">
              <a href="../how-to-buy-a-used-car"/ class="button button-primary">Buying a Used Car</a>
            </div>
            <div class="one-half column u-text-center">
              <a href="../buying-a-new-car"/ class="button button-primary">Buying a New Car</a>
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
