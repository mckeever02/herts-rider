<!-- Set the Page ID -->
<?php $page_id = 13; ?>

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
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p>You don’t have to learn with a driving school – there’s a stack of independent instructors out there eager to get you on the road. They don’t necessarily charge any more than the driving schools either – some may well charge less.</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">While you’ll be focusing on the cost of your learning, what matters most is the quality of the instruction, so don’t be afraid to phone around and sound them out. A higher quality of instruction means you’ll pay less in the long run, to get on the road.</p>

           <p> You can find out about independent driving instructors near where you live by logging on to the <a href="http://finddrivinginstructor.direct.gov.uk/DSAFindNearestWebApp/findNearest.form?lang=en" target="_blank">DVSA database</a> of approved instructors. Not all instructors are registered though, so if you know of one who isn’t on the list, don’t assume there’s a problem.</p>

            <p>Whatever you do in your learning to drive journey, enjoy it, but more importantly, value it. Invest in the acquisition of an important life skill and become a safe driver.</p>
          </div>

        </section>

        <section class="container">
          <div class="row">
            <div class="one-half column wow slideInLeft">
              <div class="u-text-center positive">
                <svg class="icon" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 500 500">
                  <path d="M250,490.079c-64.127,0-124.417-24.973-169.762-70.317C34.894,374.417,9.921,314.128,9.921,250
                    c0-64.127,24.973-124.417,70.317-169.762C125.583,34.894,185.873,9.921,250,9.921c64.128,0,124.417,24.973,169.762,70.317
                    S490.079,185.873,490.079,250c0,64.128-24.973,124.417-70.317,169.762S314.128,490.079,250,490.079z M250,34.921
                    c-57.45,0-111.461,22.372-152.084,62.995S34.921,192.551,34.921,250c0,57.45,22.372,111.461,62.995,152.084
                    S192.55,465.079,250,465.079c57.45,0,111.461-22.372,152.084-62.995S465.079,307.45,465.079,250
                    c0-57.449-22.372-111.461-62.995-152.084S307.45,34.921,250,34.921z"/>
                  <g>
                    <path d="M368.992,165.287c2.241,1.879,3.473,4.362,3.648,7.461c0.197,3.088-0.66,5.956-2.527,8.582
                      c-71.072,101.454-109.51,156.209-115.333,164.274c-6,8.066-13.735,12.143-23.208,12.242c-9.472,0.088-17.295-3.99-23.493-12.242
                      l-78.192-109.992c-1.868-2.615-2.725-5.527-2.527-8.713c0.176-3.187,1.406-5.725,3.648-7.593
                      c9.56-8.252,20.263-15.658,32.064-22.229c2.439-1.308,5.165-1.495,8.175-0.561c2.989,0.945,5.428,2.725,7.296,5.34l52.897,74.27
                      l90.301-128.277c1.868-2.626,4.264-4.362,7.165-5.198c2.9-0.846,5.67-0.615,8.307,0.704
                      C349.587,150.101,360.18,157.419,368.992,165.287z"/>
                  </g>
                </svg>
                <h2 class="positive">Be reassured by...</h2>
              </div><!-- /u-text-center -->
              <ol class="numbered-list">
                <li>The most professional instructors won't be focused on pass rates solely. What matters is how you drive after you’ve passed your test. Have they created a safe driver for life?</li>
                <li>Ask your instructor how their ex-pupils are managing driving independently. A good instructor will still be in touch, or even teaching ex-pupils advanced driving.</li>
                <li>Good instructors will suggest they chat or meet your parents/guardians, before the first lesson. Don't be put off by that; it’s a sign that they’re doing a proper job.</li>
              </ol>
            </div><!-- one-half column -->

            <div class="one-half column wow slideInRight">
              <div class="u-text-center negative">
                <svg class="icon" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 500 500">
                  <g>
                    <path d="M294.177,249.999l56.407,56.708c2.587,2.39,4.08,5.223,4.476,8.511c0.397,3.276-0.396,6.016-2.39,8.208
                      c-8.558,10.936-18.304,20.694-29.24,29.239c-2.191,1.994-4.931,2.798-8.207,2.39c-3.288-0.396-6.227-1.783-8.814-4.173
                      l-56.407-56.708l-56.708,56.708c-2.39,2.39-5.223,3.777-8.511,4.173c-3.276,0.408-6.109-0.396-8.499-2.39
                      c-10.75-8.545-20.403-18.198-28.949-28.947c-1.993-2.392-2.798-5.224-2.39-8.5c0.396-3.288,1.784-6.121,4.173-8.511l56.708-56.708
                      l-56.405-56.405c-2.588-2.588-4.08-5.526-4.477-8.814c-0.408-3.276,0.396-6.016,2.39-8.208
                      c8.348-10.737,18.001-20.484,28.949-29.24c2.39-1.994,5.223-2.787,8.499-2.391c3.288,0.396,6.121,1.889,8.511,4.477l56.708,54.015
                      l56.407-54.015c2.588-2.588,5.526-4.081,8.814-4.477c3.276-0.396,6.016,0.396,8.207,2.391c10.937,8.557,20.683,18.304,29.24,29.24
                      c1.994,2.192,2.787,4.932,2.39,8.208c-0.396,3.288-1.889,6.226-4.476,8.814L294.177,249.999z"/>
                  </g>
                  <path d="M250,490.079c-64.127,0-124.417-24.973-169.762-70.317C34.894,374.417,9.921,314.128,9.921,250
                    c0-64.127,24.973-124.417,70.317-169.762C125.583,34.893,185.873,9.92,250,9.92c64.128,0,124.417,24.973,169.762,70.317
                    c45.345,45.345,70.317,105.635,70.317,169.762c0,64.128-24.973,124.417-70.317,169.762S314.128,490.079,250,490.079z M250,34.92
                    c-57.45,0-111.461,22.372-152.084,62.995S34.921,192.55,34.921,250c0,57.45,22.372,111.461,62.995,152.084
                    S192.55,465.079,250,465.079c57.45,0,111.461-22.372,152.084-62.995S465.079,307.45,465.079,250
                    c0-57.45-22.372-111.461-62.995-152.084S307.45,34.92,250,34.92z"/>
                </svg>
                <h2 class="negative">Run a mile if...</h2>
              </div><!-- /u-text-center -->
              <ol class="numbered-list">
                <li>An instructor tells you how long it’ll take to pass, in your first conversation with them. If they say they’ll get you through in 20 lessons, what are they basing this on?</li>
                <li>A good instructor, with the right skills and experience will be charging around £26-£35 an hour. Someone who promises a quick pass and flogs their skills on the cheap is not a good instructor. Why would they sell their skills so cheaply if they’re so good?</li>
              </ol>
            </div><!-- one-half column -->
          </div><!-- /row -->
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
