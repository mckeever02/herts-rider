<!-- Set the Page ID -->
<?php $page_id = 9; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop&crop=faces" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <p class="subheading">How to</p>
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p>Driving lessons are costly, so don't waste time with your instructor. They're skilled and you're paying for their expertise, so make the most of it. Here’s how:</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

       <section class="container">
            <h2 class="u-text-center">Make the most of your lessons</h2>
            <h3 class="u-text-center">In Association with</h3>
            <div class="row u-text-center">
                <a href="http://www.bsm.co.uk/" target="_blank">
                    <img src="images/bsm-logo.png" alt="BSM" width="100px" />


               </a>
           </div>

        </section>
        <section class="container step-timeline wow fadeInUp">

          <!-- Step -->
          <?php foreach($make_the_most_of_your_lessons_steps as $item) {
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
          <div class="longform-text-container">
            <p>It's not unusual to quickly pick up how a car's controls work; what takes the time – and hence requires the most lessons – is figuring out how to use the roads.</p>
          </div>
          <blockquote>
            <span class="small-text footnote">It's a fact</span>
            <p>Getting to grips with other road users, junctions, roundabouts, the various types of road and all those signs is what'll take the time.</p>
          </blockquote>
          <div class="longform-text-container">
            <p>So even if you're a natural with a car's controls, don't assume you'll be ready for your test very quickly – you might take ages to get to grips with everything else.</p>
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
