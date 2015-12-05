<!-- Set the Page ID -->
<?php $page_id = 20; ?>

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
            <p class="blurb"><? echo $page_issue2[''.$page_id.'']['blurb'];?></p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">Win the kit you need to stay safe on your bike, thanks to <a href="http://sportsbikeshop.co.uk" target="_blank">sportsbikeshop.co.uk</a>. You need the right kit when you’re on your motorbike, and thanks to SportsBikeShop you’ve got the chance to win over £750-worth of the best biking clobber.</p>

            <p>You don’t just need safety kit such as a helmet, jacket, boots, gloves and trousers, you also need security and protection. That’s why SportsBikeShop has included a chain lock worth £40 and a bike cover to keep your pride and joy sheltered from the elements. Just look at this lot...</p>


          </div><!-- /longform-text-container -->

        </section>

        <section class="container wow fadeInUp">
          <div class="row">
            <div class="four columns">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/helmet.jpg" alt="Kabuto Kamui helmet"></div>
              <div class="u-text-center">
                <h2>Kabuto Kamui helmet</h2>
                <h3>Worth £199.99</h3>
              </div>
            </div>
            <div class="four columns">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/jacket.jpg" alt="ARMR Ashido 2 jacket"></div>
              <div class="u-text-center">
                <h2>ARMR Ashido 2 jacket</h2>
                <h3>Worth £99.99</h3>
              </div>
            </div>
            <div class="four columns">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/bike-cover.jpg" alt="Lampa Optima bike cover"></div>
              <div class="u-text-center">
                <h2>Lampa Optima bike cover</h2>
                <h3>Worth £39.99</h3>
              </div>
            </div>
          </row>
        </section>
        <section class="container">
          <div class="row">
            <div class="four columns">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/chain-lock.jpg" alt="Lampa Kiton chain lock"></div>
              <div class="u-text-center">
                <h2>Lampa Kiton chain lock</h2>
                <h3>Worth £39.99</h3>
              </div>
            </div>
            <div class="four columns">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/gloves.jpg" alt="ARMR S550 gloves"></div>
              <div class="u-text-center">
                <h2>ARMR S550 gloves</h2>
                <h3>Worth £49.99</h3>
              </div>
            </div>
            <div class="four columns">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/boots.jpg" alt="Falco Boots Oxegen"></div>
              <div class="u-text-center">
                <h2>Falco Boots Oxegen</h2>
                <h3>Worth £129.99</h3>
              </div>
            </div>
          </div><!--  /row -->
        </section>
        <section class="container">
          <div class="row">
            <div class="four columns">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/roadskin-jeans.jpg" alt="Roadskin Paranoid jeans"></div>
              <div class="u-text-center">
                <h2>Roadskin Paranoid jeans</h2>
                <h3>Worth £119.99</h3>
              </div>
            </div>
            <div class="four columns">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/indo-trousers.jpg" alt="ARMR Indo trousers"></div>
              <div class="u-text-center">
                <h2>ARMR Indo trousers</h2>
                <h3>Worth £79.99</h3>
              </div>
            </div>
          </div><!-- /row -->
        </section>


          <div class="u-center-table">
            <h2 class="u-text-center">Enter for your chance to win</h2>
            <a href="https://www.surveymonkey.com/r/QZ5CFJM" class="button button-icon" style="display:block;" target="_blank">Click Here to Enter</a>

<!--            <script>(function(t,e,c,s){var n,o,a;t.SMCX=t.SMCX||[],e.getElementById(s)||(n=e.getElementsByTagName(c),o=n[n.length-1],a=e.createElement(c),a.type="text/javascript",a.async=!0,a.id=s,a.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/SqaxiL9F5IL_2BaxSjltdpts7xBcz_2F81ztj34ctkSWg8M_2B39zZv0yh6FLfPUGKb_2B8u.js"].join(""),o.parentNode.insertBefore(a,o))})(window,document,"script","smcx-sdk");</script>-->
          </div><!-- /u-text-center -->

        </section>

        <section class="container">
          <div class="longform-text-container">
            <h4>The T's &amp; C's</h4>
            <ul>
              <li>This competition is run by FirstCar Limited and SportsBikeShop Limited.</li>
              <li>Entries must be recieved by midnight on 1 June 2016 after which the winner will be randomly selected</li>
              <li>For full terms and conditions see <a href="http://firstbikemagazine.co.uk" target="_blank">www.firstbikemagazine.co.uk</a></li>
            </ul>
          </div>

        </section>





        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
