<!-- Set the Page ID -->
<?php $page_id = 5; ?>

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
            <p class="introduction">Whether you’re a new rider or a grizzly seasoned dispatcher, one key quality all riders need is self-awareness. I don’t mean you need to take an existential journey into the meaning of existence and your place within it, but you do need to have some idea of how you react to difference circumstances and situations.</p>

            <p>As a biker you have to process huge amounts of information fairly quickly in order to assess risk and make sensible decisions. Part of how you do this is by assessing other road users based on their previous behaviour and probably, rightly or wrongly, what they’re driving/riding or how they’re dressed.</p> 

          </div><!-- /longform-text-container -->


            <div class="row">
              <div class="two-thirds column offset-by-one-third">
                <blockquote>
                  <p>It’s easy to focus on the road, other road users and the conditions instead of yourself.</p>
                </blockquote>
              </div>
            </div>

            <div class="longform-text-container">


            <p>But what about yourself? How aware of your own behaviour in different situations are you, and how you react in different circumstances? When you start riding, or do only relatively short trips in good conditions, it’s easy to focus on the road, other road users and the conditions instead of yourself.</p> 

            <p>But for those who are riding all year or undertaking longer trips it’s important to know how being tired, or hungry, or scared or thrilled affect your decision making and therefore your riding. Because if you’re making decisions differently from usual you’re probably at more or less risk than usual too. And that’s when things can go wrong. Potentially very wrong.</p>

            <h2>Fatigue</h2>
            <p>Being tired is the most common one, especially at this time of year or if you’re off touring and doing long days in the saddle. Be aware if you slow down, or speed up, or get more frustrated or angry when you’re tired. Think about how you’re reacting and make allowances in your riding plan for how you’re thinking and for the fact the whole decision making process could take longer.</p>

            <p>Tiredness can also cause your vision to drop so you see things later, which is why you might need to slow, to compensate. Alternatively, you could consciously raise your vision regularly, perhaps in conjunction with slowing.</p>

            <h2>Hungry/thirsty/need a smoke</h2>

            <p>It’s easy to ride through lunch, or not stop for water. Learn how your body displays dehydration or hunger symptoms, or that nicotine urge, and recognise the signs so you can stop and deal with it. Or if stopping really isn’t an option work out how you can deal with the changed psychical and mental state caused by these.</p>

            <h2>Scared/thrilled/angry</h2>

            <p>All sorts of situations occur to change your mood in an instant. How do you react? Get to know if you’re likely to chase someone down and kick their door – and perhaps work on a bit of anger management. Does having an awesome ride on new roads in stunning scenery make you more or less risk-averse?</p> 

            <p>The more often you take the time to think ‘why is x, y or z happening?’ the better your decision making will be, the more you’ll enjoy your riding and the safer you’ll be.</p>

          </div><!-- /longform-text-container -->

          <?php include ("$path/includes/article-social-share.php"); ?>

      </article>


  <!-- End Document
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

     <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
