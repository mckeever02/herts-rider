<!-- Set the Page ID -->
<?php $page_id = 29; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="last drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p>If you have special needs such as hearing or reading difficulties, help is at hand to help you with your test</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">Just because you have special needs, you’re not necessarily prevented from taking your theory and practical tests. You’ll need to notify the DVSA of your circumstances when you apply for the test, so any provisions can be made, but you won’t have to pay any more than the standard test fee.</p>


          </div>

        </section>

        <section class="container numbered wow fadeInUp">
          <h1>Theory Test</h1>
          <div class="row">
            <div class="one-third column">
              <h3>Reading Difficulties</h3>
              <p>If you have problems reading, you can ask for a voiceover in Welsh or English and you can also ask for extra time to complete the multiple-choice questions. You’ll need to supply proof of your reading difficulties to the theory test booking service when you apply.</p>
            </div><!-- /one-third column -->

            <div class="one-third column">
              <h3>Hearing difficulties</h3>
              <p>You can take the theory test in British Sign Language (BSL) if you’re deaf or have hearing difficulties; the interpretation runs alongside the standard test questions and answers. Alternatively, an interpreter can accompany you into the test centre.</p>
            </div><!-- /one-third column -->

            <div class="one-third column">
              <h3>Other special needs</h3>
              <p>If you have other special needs, they can possibly be accommodated too; just get in touch with the DVSA to discuss the help you need:</p>
              <p><strong>DVSA theory test enquiries<br>
                         PO BOX 381 <br>
                         M50 3UW</strong>
              </p>
            </div><!-- /one-third column -->
          </div><!-- /row -->
        </section>

        <section class="container numbered wow fadeInUp">
          <div class="longform-text-container">
            <h1>Practical test</h1>
            <p>You’ll have to take the standard driving test, no matter how serious your disability – although you may get extra time if necessary.</p>

            <p>It was possible until recently to take a foreign-language interpreter with you, but they’re no longer allowed, so the test has to be taken in English, Welsh, or British Sign Language.</p>

            <p>As with the theory test, you have to flag up any medical conditions at the point that you book the test. Such conditions include:</p>

            <ul class="medium-list semi-bold-list">
              <li>Any condition which affects your movement</li>
              <li>Any special learning needs</li>
              <li>Arthritis</li>
              <li>Deafness (profound or otherwise)</li>
              <li>Dyslexia</li>
              <li>Epilepsy</li>
              <li>Missing limbs</li>
              <li>Paraplegia</li>
              <li>Pregnancy (late stage)</li>
              <li>Any other special needs</li>
            </ul>
          </div><!-- /longform-text-container -->


          <div class="row">
            <div class="one-third column">
              <h3>Hearing difficulties</h3>
              <p>The examiner can communicate via written notes if you have hearing difficulties; they’ll also look at you to help you lip read if it’s helpful. Directions will be given as hand signals, explained and shown to you using written cards before your test starts.</p>
            </div><!-- /one-third column -->

            <div class="one-third column">
              <h3>BSL interpreter</h3>
              <p>You can take the theory test in British Sign Language (BSL) if you’re deaf or have hearing difficulties; the interpretation runs alongside the standard test questions and answers. Alternatively, an interpreter can accompany you into the test centre.</p>
            </div><!-- /one-third column -->

            <div class="one-third column">
              <h3>Pregnant</h3>
              <p>If you have other special needs, they can possibly be accommodated too; just get in touch with the DVSA to discuss the help you need:</p>
              <p><strong>DVSA theory test enquiries<br>
                         PO BOX 381 <br>
                         M50 3UW</strong>
              </p>
            </div><!-- /one-third column -->
          </div><!-- /row -->
          <div class="row">
            <div class="one-third column">
              <h3>Eyesight test</h3>
              <p>At the start of the practical test, the examiner will ask you to read the number plate on a parked vehicle. You can write down what you see if you have learning difficulties or don’t speak English.</p>
            </div><!-- /one-third column -->

            <div class="one-third column">
              <h3>Independent driving</h3>
              <p>If you declared any special needs when you booked your test, adjustments might be made to this section; you might be asked if you’d prefer to follow traffic signs for example. Or you could choose to follow a set of directions, supported by a diagram – this would be limited to three directions, although sometimes it’s just two.</p>
            </div><!-- /one-third column -->
          </div><!-- /row -->
        </section>

        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
