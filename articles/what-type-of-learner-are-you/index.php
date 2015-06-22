<!-- Set the Page ID -->
<?php $page_id = 6; ?>

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
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p>There are lots of ways to remember all the info that’s thrown at you throughout the learning process. Here’s how to make sense of it all</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container">

          <div class="longform-text-container">
            <p class="introduction">When you go through the learning process, you’ll find you pick things up more easily depending on how they’re presented. Sometimes you learn in a combination of ways, but for most of us there’s a method that works best. Of the three methods below, focus on the one that does it for you, so you can learn as effectively as possible.</p>

            <p>For the most effective learning, you’ll probably have to use elements of more than one method though.</p>

          </div><!-- /longform-text-container -->

        </section>

        <section class="container numbered wow fadeInUp">
          <h1>Seeing or reading</h1>
          <div class="row">
            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/seeing-reading.jpg" alt="Seeing or reading"></div>
            </div><!-- /one-half column -->
            <div class="one-half column">
              <ol class="numbered-list">
                <li>Make your own flash cards containing key information.</li>
                <li>Draw up a planner or chart, maybe using colour coding.</li>
                <li>Make plenty of notes to guide yourself through the learning process.</li>
                <li>Watch online resources such as video clips or pages of information.</li>
                <li>Read (and re-read) as many key books as you can find. Start with the Highway Code.</li>
              </ol>
            </div><!-- /one-half column -->
          </div><!-- /row -->
        </section>

        <section class="container">
          <p class="small-text footnote">Top tip</p>
          <blockquote><p>Set yourself a schedule with deadlines – then make sure you stick to those deadlines. If you don’t, your learning process may just keep dragging on.</p></blockquote>
        </section>

        <section class="container numbered wow fadeInUp">
          <h1>Hearing</h1>
          <div class="row">
            <div class="one-half column">
              <ol class="numbered-list">
                <li>Listen as an instructor or tutor guides you.</li>
                <li>Talk yourself through whatever it is you’re learning.</li>
                <li>Buy a dictaphone so you can record yourself speaking, then play it back.</li>
                <li>Listen to online videos, taking in the soundtrack as you go along.</li>
              </ol>
            </div><!-- /one-half column -->
            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/hearing.jpg" alt="Seeing or reading"></div>
            </div><!-- /one-half column -->
          </div><!-- /row -->
        </section>

        <section class="container">
          <a href="http://www.bsm.co.uk/" target="_blank"><div class="imgix-fluid-bg imgix-image" style="padding-bottom:25%;" data-src="https://firstcar.imgix.net/ads/inline-ads/BSM-banner.jpg" alt="Don't forget to book your BSM lessons now"></div></a>
        </section>

        <section class="container numbered wow fadeInUp">
          <h1>Doing</h1>
          <div class="row">
            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/doing.jpg" alt="Seeing or reading"></div>
            </div><!-- /one-half column -->
            <div class="one-half column">
              <ol class="numbered-list">
                <li>Practise doing things as much as possible, ideally with your instructor.</li>
                <li>Continue this practise with a parent or friend.</li>
                <li>Set up some short study sessions with someone, so you can continue to practise.</li>
                <li>Watch what your instructor does, and copy them afterwards.</li>
              </ol>
            </div><!-- /one-half column -->
          </div><!-- /row -->
        </section>

        <section class="container">
          <p class="small-text footnote">Top tip</p>
          <blockquote><p>Use mnemonics to help remember stuff. These are sayings, stories or techniques that you use to remember things that would otherwise be hard to remember. For example, the five key ingredients for safe driving spell COAST: Concentration, Observation, Anticipation, Space, Time.</p></blockquote>
        </section>

        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
