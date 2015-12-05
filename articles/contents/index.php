<!-- Set the Page ID -->
<?php $page_id = 0; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="Herts Rider">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page_issue2[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header light" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>
    </header>



        <ul class="contents">
            <li class="intro article-tile imgix-fluid-bg" data-src="<? echo $imgix_path ?>about/images/page-header.jpg?auto=format,enhance&fit=crop">
                <a class="tile-link" href="../about">
                    <h2>Welcome to Hertfordshire Rider</h2>
                    <p class="opening">Whatever you do on two wheels, you need to do things right.</p>
                    <p>Hertfordshire Rider tells you everything you need to know whether it’s about how to sharpen up your riding skills, what the top new products are that you can buy, where to go for the best insurance deals or how to maintain or secure your bike. It’s all in here! </p>
                </a>
                <a href="../about" class="button button-small button-icon">Find out more</a>
            </li>

            <li class="intro article-tile imgix-fluid-bg" data-src="<? echo $imgix_path ?>contents/images/page-header.jpg?auto=format,enhance&fit=crop">
               <a class="tile-link">
                <h3>Subscribe to our Newsletter</h3>
                <p>Keep up-to-date with Herts Rider by signing up to our Newsletter.</p>

                <?=$success?>
                <form id="contact-form" name="contact-form" method="post" action="../../submit.php#form-container">
                    <input type="text" placeholder="Enter your email" class="validate[required,custom[email]]" name="email" id="email" value="<?=(isset($_SESSION['post']['email']) ? $_SESSION['post']['email'] : '');?>" />
                    <input type="submit" name="button" value="Subscribe" />
                    <?=$str?>
                </form>

                </a>
            </li>

            <?php foreach($page_issue2 as $item) {
            echo "
                <li class=\"article-tile imgix-fluid-bg {$item['id']} {$item['type']}\" data-src=\"$imgix_path{$item['id']}/images/page-header.jpg?auto=format,enhance&fit=crop\">
                    <a class=\"tile-link\" href=\"../{$item['id']}\">
                        <h3>{$item['title']}</h3>
                        <p>{$item['blurb']}</p>
                    </a>
                    <a href=\"../{$item['id']}\" class=\"button button-small button-icon\">{$item['button']}</a>
                </li>
                ";
            } ?>
        </ul>



<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
