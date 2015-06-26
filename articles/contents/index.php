<!-- Set the Page ID -->
<?php $page_id = 0; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="Herts Rider">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header light" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>
    </header>



      <ul class="contents">
            <?php foreach($page as $item) {
                echo "
                    <li class=\"article-tile imgix-fluid-bg {$item['id']} {$item['type']}\" data-src=\"https://herts-rider.imgix.net/articles/{$item['id']}/images/page-header.jpg?auto=format,enhance&fit=crop\">
                        <a class=\"tile-link\" href=\"../{$item['id']}\">
                            <h3>{$item['title']}</h3>
                            <p>{$item['blurb']}</p>
                        </a>
                        <a href=\"../{$item['id']}\" class=\"button button-small button-icon\">View the Article</a>
                    </li>
                    ";
                } ?>
          </ul>



<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
