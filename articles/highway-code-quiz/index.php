<!-- Set the Page ID -->
<?php $page_id = 15; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop" role="banner">
        <?php include ("$path/includes/head.php"); ?>
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <p class="subheading">Interactive quiz</p>
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p><? echo $page[''.$page_id.'']['blurb'];?></p>
        </div><!-- /five columns -->

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section id="slickQuiz" class="container wow fadeInUp">

          <div class="quizArea">
              <div class="quizHeader">
                  <!-- where the quiz main copy goes -->

                  <a class="button startQuiz" href="#">Get Started!</a>
              </div>

              <!-- where the quiz gets built -->
          </div>

          <div class="quizResults">
              <h3 class="quizScore">You Scored: <span><!-- where the quiz score goes --></span></h3>

              <h3 class="quizLevel"><strong>Ranking:</strong> <span><!-- where the quiz ranking level goes --></span></h3>

              <div class="quizResultsCopy">
                  <!-- where the quiz result copy goes -->
              </div>
          </div>
        </section>

        <?php include ("$path/includes/article-social-share.php"); ?>
    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

  <!-- SLICKQUIZ -->
  <script src="<?= $path;?>/js/min/slickQuiz-min.js"></script>
  <script src="<?= $path;?>/js/min/slickQuiz-config-min.js"></script>
  <script>
    $(function () {
        $('#slickQuiz').slickQuiz({
          skipStartButton: true,
          preventUnanswered: true
        });
    });
  </script>

</body>
</html>
