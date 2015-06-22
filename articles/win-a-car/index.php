<!-- Set the Page ID -->
<?php $page_id = 5; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&h=450&fit=crop" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <p class="subheading">In association with Marmalade</p>
            <h1>Win one of these cars</h1>
            <p>FirstCar has teamed up with Marmalade, the award-winning young driver insurance specialist, to offer you the chance of winning a brand new car.</p>
            <a target="_blank" href="https://firstcar.co.uk/win" class="button button-primary button-large button-inverse">Enter to win</a>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction"><a href="http://www.wearemarmalade.co.uk/" target="_blank">Marmalade</a> is the champion for young drivers and their parents, using clever black box technology to lower insurance costs and help young drivers stay safer on the roads.</p>

            <p class="u-cf">FirstCar has teamed up with marmalade, the award-winning young driver insurance specialist. As a result, you could win a choice of a brilliant Ford Fiesta 1.25 82 Zetec worth £13,095 or a Vauxhall Corsa 1.2 SXi worth £15,465!</p>
          </div>

        </section>

        <section class="container numbered wow fadeIn">
            <h1>Ford Fiesta 1.25 82 Zetec</h1>

          <div class="row">
            <div class="one-half column">
                <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/ford-fiesta.jpg?auto=format,enhance" alt="Ford Fiesta 1.25 82 Zetec"></div><!-- /one-half column -->
            </div><!-- /one-half column -->
            <div class="one-half column">
              <ol class="numbered-list medium-list">
                <li>Ford SYNC – play your music, make your calls, send and receive messages – just say the word!</li>
                <li>Ford MyKey – tailor your car settings to suit your style</li>
                <li>15” spoke alloy wheels</li>
                <li>Trip computer</li>
                <li>Ambient Lighting</li>
                <li><strong>Worth £13,095</strong></li>
              </ol>
            </div><!-- /one-half column -->
          </div><!-- /row -->


        </section>

        <section class="container numbered wow fadeIn">
          <h1>Vauxhall Corsa 1.2 SXi</h1>

          <div class="row">
            <div class="one-half column">
              <ol class="medium-list numbered-list">
                <li>Touch-screen satellite navigation</li>
                <li>Bluetooth mobile connectivity</li>
                <li>USB, iphone sockets for music playback</li>
                <li>DAB digital radio</li>
                <li>CD/radio with MP3 player</li>
                <li>Sports leather steering wheel</li>
                <li>Air conditioning</li>
                <li>16-inch sports alloy wheels</li>
                <li><strong>Worth £15,465</strong></li>
              </ul>
            </div><!-- /one-half column -->

            <div class="one-half column">
                <div class="imgix-fluid-bg imgix-image" style="padding-bottom:65%;" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/vauxhall.jpg?auto=format,enhance" alt="Vauxhall Corsa 1.2 SXi"></div><!-- /one-half column -->
            </div><!-- /one-half column -->
          </div><!-- /row -->
        </section>

        <section class="container">
          <div class="u-center-table">
            <a target="_blank" href="https://firstcar.co.uk/win" class="button button-primary button-large button-inverse">Enter for your chance to win</a>
          </div><!-- /u-center -->
        </section>

        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
