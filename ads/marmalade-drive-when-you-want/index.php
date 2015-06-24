<!-- Set the Page ID -->
<?php $page_id = 16; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>
  
  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body class="ad drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

    </header>
    <?php include ("$path/includes/prev-next.php"); ?>
    <div class="container">
        <a href="<? echo $page[''.$page_id.'']['url'];?>" target="_blank">
            <div class="imgix-fluid-bg" style="padding-bottom:70%;" data-src="https://firstcar.imgix.net/ads/<? echo $page[''.$page_id.'']['id'];?>/ad.jpg" alt="<? echo $page[''.$page_id.'']['title'];?>"></div>
        </a>
        <span>Advertisment</span>
    </div>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>