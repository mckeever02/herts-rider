<!-- Set the Page ID -->

<?php $page_id = 19; ?>

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
            <p class="introduction">When you buy protective clothing you’re putting your health &mdash; your life even &mdash; in the hands of others. That’s why you must make a few key checks before you hand over any money.</p>

            <p class="u-cf">To ensure an adequate level of protection, all protective clothing has to be tested. If you buy something that hasn’t gone through this procedure, there’s no way of knowing whether or not it’ll look after you in the event of a crash &mdash; so if you really want to give yourself a fighting chance, buy something that’s been tested.</p>

            <p>What you’re looking for is a label that has a CE (Conformité Européenne) marking on it. This shows that the clothing has undergone rigorous testing to ensure that if you come off your bike, it’ll protect you as well as possible.</p>

              <div class="row">
                <div class="u-text-center">
                  <div class="three columns offset-by-four">
                    <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/CE-marking.jpg" alt="CE marking"></div>
                  </div>
                </div>
              </div>

            <p>If you buy something that doesn’t have the CE marking on it, the chances are that it’s little more than mainstream leisure clothing which will be torn to shreds at the first sign of an interface with the Tarmac.</p>

            <p>The whole point of CE testing is that by doing everything in a laboratory, a minimum level of protection can be guaranteed. The tests are standardised and repeatable, and because they’re done independently rather than by clothing manufacturers you should have faith in them.</p>

            <p>There are several European Standards relating to each piece of protective equipment that you might buy, for when you’re riding. If we were to detail them all here your eyes would soon be glazing over, but the key ones you’re looking for are:</p>

          </div><!-- /longform-text-container -->
        </section>

        <section class="container">
          <div class="row">

            <div class="one-third column">
              <div class="u-text-center">
               <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/boots.jpg" alt="boots"></div>
                <h3>Boots</h3>
                <h5>CE EN 13634</h5>
              </div>
            </div><!-- /one-third column -->

            <div class="one-third column">
              <div class="u-text-center">
                <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/jacket.jpg" alt="Jackets, trousers and suits"></div>
                <h3>Jackets, trousers &amp; suits</h3>
                <h5>CE EN 13595</h5>
              </div>
            </div><!-- /one-third column -->

            <div class="one-third column">
              <div class="u-text-center">
                <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/body-armour.jpg" alt="body armour"></div>
                <h3>Impact protectors &amp; body armour</h3>
                <h5>CE EN 1621</h5>
              </div>
            </div><!-- /one-third column -->
          </div><!-- /row -->
        </section>

        <section class="container">
          <div class="longform-text-container">
            <p>Just to confuse things though, crash helmets and visors don’t have to be CE-marked, as instead they can display the British Standard kitemark, or European equivalent. Also, look for the helmet’s SHARP rating, mentioned on the previous page.</p>

            <p>It would be easy to assume that all this testing is just bureaucratic nonsense, dreamed up to keep people in jobs &mdash; but it really isn’t. It’s about raising standards to ensure that motorcyclists like you can buy equipment that will protect you in the event of a crash.</p>
          </div>

          <blockquote>
            <div class="row">
              <div class="four columns">
                <div class="imgix-fluid-bg imgix-image" style="padding-bottom:105%;" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/helmet.jpg" alt="Crash helmet"></div>
              </div>
              <div class="eight columns">
                <p>Crash helmets and visors don’t have to be CE-marked, as instead they can display the British Standard kitemark, or European equivalent.</p>
              </div>
            </div>

          </blockquote>

          <div class="longform-text-container">
            <p>It would also be easy to assume that buying something which is CE-approved would be expensive, but that’s not necessarily the case. There are pieces of clothing for every budget &mdash; and besides, what price do you put on a serious injury that could be avoided by investing in the right kit?</p>

            <p>One way of making sure you’re buying decent kit is to stick with reputable traders. Buying cheap knock-offs down the market won’t help if you come off your bike and if you think you’re being offered counterfeit clothing at any point, get in touch with Trading Standards and let them know about it.</p>

            <p>Finally, if you buy something online you should have 14 days to return it if it isn’t suitable &mdash; although you’ll have to return it in the same condition in which it was supplied.</p>
          </div>
        </section>







        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
