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

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&h=450&fit=crop" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <h1>Finding the perfect instructor</h1>
            <p>If you want to enjoy the learning process and get through it as swiftly as possible, you need to find the right tutor</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">Finding the right instructor is crucial; they’ll help you pass more quickly and you'll also find the learning process more enjoyable. But to find the perfect driving instructor, you have to put in some effort. Here’s how:</p>
            </div>
        </section>

        <section class="container step-timeline">

          <!-- Step -->
          <?php foreach($perfect_instructor_steps as $item) {
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
          <blockquote class="u-text-center"><p>There are other important factors to consider...</p></blockquote>
        </section>

        <section class="container numbered wow fadeInUp">
          <h1>Independent or School?</h1>
          <div class="row">
            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/independent-school.jpg" alt="Independent or school"></div>
              <blockquote>
                <p>You don't have to go with one of the big schools.</p>
              </blockquote>
            </div><!-- /one-half column -->
            <div class="one-half column">
              <p>Should you choose an independent instructor or a well-known school such as the AA or BSM? What matters is that you have a tutor who gives you the right guidance and makes you feel comfortable; they could work alone or on behalf of a school.</p>

              <p>A school can often provide a replacement tutor in the event of an illness; there's also more likelihood of special offers being available in terms of pricing.</p>

              <p>If you book an instructor but find they're not for you, don't stick with them. You're paying good money for their services, but if they're not giving you what you need, find someone else. Start looking at alternatives straight away, although it may be worth discussing things with your existing instructor first.</p>

            </div><!-- one-half column -->
          </div><!-- /row -->
        </section>

        <section class="container numbered wow fadeInUp">
          <h1>Key questions</h1>
          <p>Before you sign up with any instructor, ask these key questions; it could save you from making a costly mistake.</p>
          <div class="row">
            <ol class="large-list numbered-list">
              <li>Is the instructor fully qualified?</li>
              <li>If I have a trainee will I pay less?</li>
              <li>If I sign up for a course and we don't get on, can I have my money back?</li>
              <li>How long is each lesson?</li>
              <li>Will I get the same instructor and car for each lesson?</li>
              <li>Can I change instructors if we don't get on?</li>
              <li>Can I get post-test training or extras like skid control sessions?</li>
              <li>Where will I be having my lessons? Will I be learning on roads suitable for my level or just running the last person home in my own time?</li>
              <li>And most importantly: do I know someone I trust who has recently passed the test and would s/he recommend the instructor/school?</li>
            </ol>
          </div>

        </section>

        <section class="container">
          <a href="http://www.bsm.co.uk/" target="_blank"><div class="imgix-fluid-bg imgix-image" style="padding-bottom:25%;" data-src="https://firstcar.imgix.net/ads/inline-ads/BSM-banner.jpg" alt="Don't forget to book your BSM lessons now"></div></a>
        </section>

        <section class="container numbered wow fadeInUp">
          <h1>Illegal instructors</h1>
          <div class="row">
            <div class="one-half column">
              <p>Driving instruction is heavily regulated to maintain standards. Anyone paid for driving instruction must have passed the Driver and Vehicle Standards Agency (DVSA) three-part exam. When qualified, an instructor will display a badge in the windscreen of whichever car they use to teach you.</p>

              <p>What you're looking for is a green octagonal badge which shows the instructor is fully qualified; a pink triangle shows they're a trainee. The badges are plastic (not paper), they’re 10.5cm across, they’re dated and carry a unique instructor number. There should also be a photograph of the instructor on the inside, taken within the last four years; if any of these elements are missing, be wary.</p>

              <div class="u-text-center">
                <img class="u-text-center" src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/badges.png" alt="Badges">
              </div><!-- /u-text-center -->

              <p>Be even more wary if there's no licence on display and you're offered lame excuses. By law the instructor has to show it when teaching and they can be fined up to £1000 for not doing so.</p>

              <p>If the licence is missing - or can't be produced - it's not just a question of the instruction potentially being rubbish; the instructor probably hasn't gone through the enhanced CRB check which is required to qualify for a full licence.</p>

              <p>On average, one illegal driving instructor is reported to the DVSA's fraud investigation team every day. There are more than 41,000 approved driving instructors on the DVSA register, so you're not short of choice. To report someone, call <a href="tel:01159366051">0115 936 6051</a>.</p>
            </div><!-- one-half column -->
            <div class="one-half column">
              <div class="imgix-fluid-bg imgix-image" style="padding-bottom:60%;" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/illegal-instructor.jpg" alt="Illegal instructors"></div>
              <blockquote>
                <p>On average, one illegal driving instructor is reported to the DVSA's fraud investigation team every day.</p>
              </blockquote>
            </div><!-- /one-half column -->
          </div><!-- /row -->
        </section>

        <?php include ("$path/includes/article-social-share.php"); ?>


    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
