<!-- Set the Page ID -->
<?php $page_id = 25; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>
  
  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <p class="subheading">All you need to know before</p>
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p>No idea what to budget to secure a new car? Here’s a rough idea of what it’ll cost to buy a new car and run it for the first year.</p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">Buying a new car doesn’t always cost a lot more than buying a used one. While a 10-year old hatch on its last legs will always cost much less to buy than a new car, the bills for repairs, road tax and fuel will be higher – probably a lot higher. Take the new route and you’ll also be getting a car that’s more highly equipped and safer too; small cars have improved massively in recent years.</p>

            <p>The problem is the up-front cost of the new car is so much more, and thanks to a steady loss in value each year, the running costs will be higher than if you bought that second-hand car instead – just maybe not as high as you thought. The secret is to get a decent discount on your new car, or to buy something that’s nearly new. </p>

            <p>You’ll need to spend at least £6000 to buy a good new or nearly new car, but in return you should get a warranty of at least three years; Kias come with a seven-year guarantee while Hyundais come with a five-year guarantee – although there’s a 100,000-mile limit. </p>

          </div><!-- /longform-container -->
        </section>

        <section class="container wow fadeIn">
           <h2>Initial costs of buying a new car</h2>
               <div class="car-animation">
                  <div class="row">
                     <img class="wow fadeIn rollout" src="<?= $path;?>/articles/<? echo $page[''.$page_id.'']['id'];?>/images/rollout-1.svg" alt="" data-wow-delay="0.5s">
                     <img class="wow fadeIn rollout" src="<?= $path;?>/articles/<? echo $page[''.$page_id.'']['id'];?>/images/rollout-3.svg" alt="" data-wow-delay="2s">
                     <img class="wow fadeIn rollout" src="<?= $path;?>/articles/<? echo $page[''.$page_id.'']['id'];?>/images/rollout-2.svg" alt="" data-wow-delay="1s">
                     <img class="wow fadeIn rollout" src="<?= $path;?>/articles/<? echo $page[''.$page_id.'']['id'];?>/images/rollout-4.svg" alt="" data-wow-delay="1.5s">
                     <div class="imgix-fluid-bg twelve columns imgix-image full-image wow slideInLeft " data-src="https://firstcar.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/citroen-ds3.jpg" style="padding-bottom:60%;" alt="New Car Costs"></div>
                   </div><!-- /row -->
               </div>

           <h2>Costs for Year 2</h2>
           <ul class="table wow zoomIn">
               <li class="one-half">
                   <h4>Insurance:</h4>
                   <p><span class="cost">£300 <small>to</small> £1500</span> (assuming no claims or points)</p>
               </li>
               <li class="one-half">
                   <h4>Servicing:</h4>
                   <p><span class="cost">£100 <small>to</small> £300</span> per year (new clutch, battery, exhaust)</p>
               </li>
               <li class="one-third">
                   <h4>Tyres:</h4>
                   <p><span class="cost">£250</span> per set (every 15-20,000 miles)</p>
               </li>
               <li class="one-third">
                   <h4>Road tax up to:</h4>
                   <p><span class="cost">£110</span> (for a car with CO2 emissions of up to £130g/km)</p>
                </li>
               <li class="one-third">
                   <h4>MOT:</h4>
                   <p><span class="cost">£55</span> per year from 3 years old</p>
               </li>
           </ul>


          <blockquote><p>For much more on buying a car, including choosing the right make and model, how the road tax system works, how to pay for your car and how to sort out the paperwork, <a href="https://firstcar.co.uk/buying" target="_blank">see here</a></p></blockquote>

        </section>

        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
