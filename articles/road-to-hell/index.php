<!-- Set the Page ID -->
<?php $page_id = 6; ?>

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
            <p><? echo $page_issue2[''.$page_id.'']['blurb'];?></p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container">

          <div class="longform-text-container">
            <div class="row">
              <div class="one-third column">
                <div class="imgix-fluid-bg imgix-image" style="padding-bottom:100%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/rob-box.jpg" alt="Rob Box"></div>
              </div><!-- one-third column -->
              <div class="two-thirds column">
                <p class="introduction">What do you think is the best way to commute? How do you approach your daily commute? What are your mindset and goals? What do you think about before you set off?</p>
                <p>You’ve probably never thought consciously about any of these things, yet all of them can make a real difference to the way you ride, and particularly how much you enjoy your riding. If you’re just a leisure rider this is important – but it’s even more so if you commute by bike.</p>

              </div>
            </div><!-- /row -->

            <p>When I switched from commuting by train into London, to doing it on a bike, I felt under pressure to prove I’d made the right choice. Pressure I’d created myself based on conversations I’d had with my mates. I wanted to show them I’d made the right call by making it quicker, easier and therefore better.</p>


            <p>This made me ride a certain way, even on my Honda CG 125. My mindset was ‘faster than the train’, so I went fast. Because I wanted to go fast, anyone who wasn’t of the same mindset as me was in my way. I didn’t ask myself any questions when I got on the bike. I didn’t really care about anyone else using the roads because I was ‘fastest’.</p>

            <div class="row">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:50%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/Motorcyclists-in-london.jpg" alt="Motorcyclists in London"></div>
              <blockquote>
                <p>&ldquo;A guy in a black cab took care of the Fireblade for me, side swiping me at about 45mph while I was filtering traffic. The bike was a write off. Luckily, I was fine.&rdquo;</p>
              </blockquote>
            </div><!-- /row -->

            <div class="container-margin-top">

              <p>Plenty of arguments, accidents and bikes later I’m of a different mindset. I’m not riding a Honda CG 125 any more. I moved onto a Honda Fireblade about a year after I’d passed my test and whilst on this bike I used to think I was at the peak of my prowess. Little did I know...</p>
              <p>I’d be knee down round the corners on my way home from work, Mark Marquez style. London to Hertford in 45 minutes. Wheelies and racing other guys on bikes away from traffic lights. Then a guy in a black cab took care of the Fireblade for me, side swiping me at about 45mph while I was filtering traffic. The bike was a write off. Luckily, I was fine.</p>

              <p>At that point in my riding career I decided to make a change. I no longer wanted to ride a superbike to commute to work, so I bought a Honda Silverwing 600. A twist-and-go scooter with a 600cc engine, it’s the sort of thing you’d rib your granddad for riding. I didn’t care. I’d already decided I was switching my mindset as well as my bike.</p>

              <p>These days, before and while I’m riding, I focus on relaxing and taking my time. I watch out for other road users and I enjoy sharing the roads. Being kind and courteous to other road users while knowing the rules of the road makes life so much easier for everyone. I ride within my limits, don’t rush my journey (I’m only going to work after all), but most importantly, I can’t ride any faster than the traffic and traffic lights will allow me.</p>
              <p>I’ve tested this theory too. If I try to ride home in a tearing hurry, opening it up between sets of traffic lights and increasing my speed where possible, it saves me perhaps 5-10 minutes. But how much difference does that really make to my life? Enough to make it worth the extra risk that comes with going that little bit faster? No chance. </p>

              <p>I see guys on superbikes racing around the streets of London and they may make it through a couple of sets of traffic lights where I’ll be held up. But you can bet that somewhere down the road, at another set of traffic lights we’ll be there, at the front, together.</p>
              <p>I’m far from unique in changing my mindset over many years of riding, but unlike a lot of motorcyclists I’ve lived to tell the tale. What a shame that many riders don’t see that by riding less competitively they’re much safer and so are those around them. And just as importantly, by relaxing more they’ll be a nicer, happier, less stressed person. Who wouldn’t want that?</p>
            </div><!-- /container -->
          </div><!-- /longform-text-container -->

          <div class="row">
            <blockquote>
              <p>&ldquo;What a shame that many riders don’t see that by riding less competitively they’re much safer and so are those around them.&rdquo;</p>
            </blockquote>
          </div>

        </section>


          <?php include ("$path/includes/article-social-share.php"); ?>


    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
