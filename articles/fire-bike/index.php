<!-- Set the Page ID -->
<?php $page_id = 16; ?>

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

            <p class="introduction">To many, the Hertfordshire Fire &amp; Rescue service is there to help get stranded cats down from trees and advise on what smoke detector to fit in your kitchen. And on a busy day they might have to attend a fire too.</p>

            <p class="u-cf">But of course the reality isn’t like that, because while Fire &amp; Rescue does attend a wide array of emergencies, a large proportion of its time is spent dealing with &mdash; and trying to prevent &mdash; crashes on the roads.</p>

            <p>Many of the people who make up the Fire &amp; Rescue team are keen drivers and motorcyclists, and over the years they’ve seen too many of their friends caught up in collisons, many of them fatal.</p>

            <p>So when it comes to the school of hard knocks, few have had an education like an experienced firefighter. Keen to reduce the number of crashes, several of these firefighters now give up their time to take the Hertfordshire FireBike (a BMW K1300) to events around the county.</p>

          </div><!-- /longform-text-container -->

          <div class="row">
            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/fire-bike.jpg" alt="BMW K1300 FireBike"></div>
              <blockquote>
                <p>Firefighters now give up their time to take the Hertfordshire FireBike to events around the county.</p>
              </blockquote>
            </div>

            <div class="one-half column">
              <p>The FireBike scheme was set up in 2011, because of the high proportion of motorcyclists being killed or seriously injured each year. Despite making up just one per cent of road users, 20 per cent of the crashes on Hertfordshire’s roads involved a motorcyclist.</p>

              <p>The FireBike has a whole array of duties to perform, including being the centre of attention at events around the county – events that promote road safety and the great work that the Fire &amp; Rescue service performs.</p>

              <p>But the FireBike isn’t just a static exhibit; its key value is as a training tool. It earns its keep by acting as a training bike on Biker Down courses as well as assessed rides for bikers undertaking advanced rider training.</p>

            </div><!-- /one-half column -->
          </div><!-- /row -->

            <div class="longform-text-container">
              <p>Sign up to an advanced riding course through Hertfordshire IAM and you could experience the FireBike in action, or get along to the Longfield training centre.</p>
            </div>


        </section>

        <section class="container">
          <div class="longform-text-container">
            <h2>A view from the inside</h2>

            <p>I’ve been an avid motorcyclist for over 30 years, and in that time I’ve lost friends or known of friends who have had accidents on their motorcycles. So when the opportunity arose to join the FireBike team I signed up immediately.</p>

            <p>The FireBike project is an ideal opportunity to get involved with the motorcycling community, get trained to a higher standard and also to pass on my knowledge and experience to others with no other agenda than to improve their safety.</p>

            <p>To qualify me to ride the FireBike with blue lights on I had to complete three weeks of training. This covered every aspect of advanced riding and roadcraft at high speed, on all types of roads and in all weather conditions.</p>
          </div>

          <div class="row">
            <div class="seven columns">
              <blockquote>
                <p>&ldquo;When the opportunity arose to join the FireBike team I signed up immediately.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div class="longform-text-container">

            <p>This initial training was just the start of things though, as I then had to undertake the IAM’s observers’ course so I could train riders to a level where they could pass their advanced rider’s qualification.</p>

            <p>This training took just over 12 months from start to finish, and since then I’ve trained five riders to enable them to pass their advanced rider’s test and given many assessed rides to members of the public with the intention of encouraging them to get further training. It’s making a genuine difference &mdash; and as a result it’s hugely rewarding.</p>

          </div><!-- /longform-text-container -->

        </section>


        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
