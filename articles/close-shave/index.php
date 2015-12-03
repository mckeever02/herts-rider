<!-- Set the Page ID -->
<?php $page_id = 8; ?>

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

        <section class="container">

          <div class="longform-text-container">
            <div class="row">
              <p class="introduction">No matter how experienced we are, we all have a near miss every now and then. I had one recently and thankfully I lived to tell the tale – and to learn a valuable lesson. I hope you can learn from my experience, to avoid your own near miss – or worse!</p>
            </div><!-- /row -->

            <p>It was a November evening, a 40mph limit on a straight, unlit country road. Dry, good surface, clear, not too cold, but very dark. I was on my CBF 1000, following a car at a good distance just below the speed limit, dipped headlight on, not in a rush. Conditions were perfect. I was relaxed in mind and body, positioned out toward the crown of the road... see and be seen. Distant headlights of a car towards us. No problem.</p>

            <p>I could have done a naughty overtake in the 40 limit, but was quite content to sit behind the car until the roundabout some half a mile further on. Looking beyond the car, I spot the twinkling red light of a cyclist ahead of us, well to the left, no problem. Now, headlights toward us are closer, still all fine. Everyone is driving and riding safely. I'm relaxed. Not concentrating...</p>

            <p>
              The car I'm following closes on the cyclist, adjusts position a little to the right. Good, I thought subconsciously, we're passing the cyclist. Plenty of room to pass before the oncoming car. No problem.
            </p>

            <p>Then things start to go wrong, and it’s MY fault. Everyone is driving and riding sensibly and safely. Even the cyclist!</p>

            <p>Now, in my mind, the car ahead of me and I were both in the process of overtaking the cyclist. We were safe, there was plenty of room, not even encroaching onto the 'wrong' side of the road.</p>

            <p>Then it happened, and it was my fault!</p>
          </div><!-- /longform-text-container -->

            <blockquote>
              <p>&ldquo;The red lights are getting closer... Very close... The car has stopped... I'm going to hit it... This is going to hurt...&rdquo;</p>
            </blockquote>

          <div class="longform-text-container">

            <p>The brake lights of the car came as a big surprise to me. Even more surprising, the speed with which I was catching up with them. After a few milliseconds, I realise that the car is braking HARD. The driver has decided not to overtake the cyclist, probably spooked by the oncoming car. I cannot move right, as the 'one towards' is now a definite hazard.</p>

            <p>After what seems like a year, I react. Both brakes on HARD. I feel the rear brake pedal pulse as the ABS kicks in. The front end dips as the front brake bites. The red lights are getting closer... Very close... The car has stopped... I'm going to hit it... This is going to hurt... </p>

            <p>Then I stop. Very, very close to the rear of the Audi, which was being driven completely safely. As a red-blooded motorcyclist, my first reaction is anger at the poor judgement of the car driver... The overtake of the cyclist was definitely on, it was safe, the driver should have passed the cyclist without loss of speed.</p>

            <p>But she didn't, and my near miss was MY fault, not hers. You see, I didn't know that she had only been driving that car for two days, that this was her first night time drive on an unlit road, and that it was in her mind that she should give cyclists plenty of room, or slow down and wait behind them until it was safe to pass. She had moved out to the correct position, then braked, (Position. Speed, etc.), just as she had been taught.</p>

            <p>What I should have been doing as I followed that Audi at a safe distance was to concentrate, to expect the unexpected, to consider, when the oncoming car took away my option of an overtake, if the car in front stops suddenly, can I? When I spotted the flashing red cyclist's light, I should have considered that the car might slow down. But I didn't. I assumed that the car would pass it. And it was my fault.</p>

            <p>I had got away with it. No pain, no damage, no insurance claim, no embarrasment.</p>

            <blockquote>
              <p>I know that I will never have a 'near miss' like that one again, and, I hope, neither will you.</p>
            </blockquote>
          </div><!-- /longform-text-container -->

        </section>

        <section class="container">

          <div class="row">
            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:70%;" data-src="<? echo $imgix_path ?><? echo $page_issue2[''.$page_id.'']['id'];?>/images/john-oliver.jpg" alt="John Oliver and his bike"></div>
            </div>
            <div class="one-half column">
              <p><em>John Oliver is 64 years old, lives in Bedfordshire, is a retired Metropolitan Police motorcyclist and one time motorcycle instructor at The Met Police Driving School, Hendon. He currently rides a Honda CBF 1000 for pleasure, all year round, and is a member of Oakley Motorcycle Club.</em></p>
            </div>
          </div>

        </section>








        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
