<!-- Set the Page ID -->
<?php $page_id = 7; ?>

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
            <p class="introduction">Keep your bike insured and you’re legal; fail to, and the cops will catch up with you sooner or later. When they do, if you can’t prove you’re insured, your bike can be seized and you’ll get 6-8 points on your licence.</p>

            <p class="u-cf">When you’re taking out your cover, make sure you’re completely honest &mdash; lying to cut the premiums is a seriously bad idea. When Craig bought a new bike with a custom paint job and race exhaust he decided to tell his insurer that it was completely standard. He crashed a few weeks later crashed but his insurer refused to pay up, because the assessor could see the bike had been modified. And as Craig had chosen to lie, the insurer cancelled the policy. Remember, insurance cover is a two-way contract between you and your insurer. You wouldn’t expect them to lie to you &mdash; so don’t lie to them.</p>

          </div><!-- /longform-text-container -->
        </section>

        <section class="container">
          <div class="row">
            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:115%;" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/right-kit.jpg" alt="Wear the right kit"></div>
            </div><!-- one-half column -->

            <div class="one-half column">
              <h2>Wear the right kit</h2>
              <p>Aside from the safety benefits of wearing proper protective equipment if you have an accident, it could also help you financially. That’s because if you’re not wearing suitable protective equipment when you’re in a collision, a personal injury award can be reduced by anywhere between 10% and 25%, so as well as being injured, you may also be out of pocket.</p>
            </div><!-- /one-half column -->
          </div><!-- /row -->

          <div class="longform-text-container">
            <h2>Excesses</h2>
            <p>The excess on your policy is the contribution you must make in the event of a claim. It can typically be set at anywhere between £100 and £500, and it’ll be set at the point that you take out your cover. This will have an impact on your premium – a higher excess usually equates to a lower premium and vice versa, but make sure that you can afford to pay your excess in the event of a claim.</p>

            <h2>No-claims discount</h2>
            <p>Once you’ve got your policy sorted, for every year you insure a bike without making a claim, you’ll earn a year’s no-claims bonus (NCB), otherwise known as a no-claims discount (NCD), usually up to a maximum of five years. How much this is worth depends on your insurer, but it’s not unusual for a five-year NCD to cut your premium by up to 60%. If you have a crash, do the maths and make sure it’s worth claiming for, as you’ll lose your No Claims Discount if you do, and could end up with much higher premiums for years to come. </p>
          </div><!-- /text-container -->
        </section>

        <section class="container">
          <div class="imgix-fluid-bg imgix-image" style="padding-bottom:30%;" data-src="https://herts-rider.imgix.net/ads/inline-ads/herts-bikes-banner.jpg" alt="Herts Bikes"></div>
        </section>

        <section class="container">
          <div class="row">

            <div class="one-half column">
              <h2>Biking saves you cash</h2>
              <p>You can save a bundle of cash insuring a bike or scooter over a car - despite a bike being seen as more vulnerable. Figures from the Department for Transport show there are 10% fewer 17-year olds with a full driving licence than a decade ago, because insurance can cost around £2000 on average for a car at that age.</p>

              <p>All the major motorcycle insurers such as Carole Nash, Lexham and Bikesure have seen more youngsters stay with two wheels for longer. Robert Balls of Bikesure says: &ldquo;A 17-year-old can insure a 125cc bike for about £400 a year. That means you’re looking at a quarter of the average premium of a car and some car premiums - depending on postcode can be ten times as much as a two-wheel premium. Add in the savings that can be made in fuel, road tax and parking and you can see that for some teenagers the only cost-effective transport they can buy is two-wheeled.&rdquo;</p>

              <p>The cost of your premium in the future is in your  hands. Take advanced courses, don’t get points on your licence, consider a limited mileage policy, fit security and join a bike club. These things all help reduce your premium.</p>

              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://herts-rider.imgix.net/ads/inline-ads/herts-bikes-square.jpg" alt="Herts Bikes"></div>

            </div><!-- /one-half column -->

            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:50%;" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/scooter.jpg" alt="Man on scooter"></div>
              <blockquote><p>&ldquo;A 17-year-old can insure a 125cc bike for about £400 a year.&rdquo;</p></blockquote>
            </div><!-- one-half column -->

          </div><!-- /row -->
        </section>

        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
