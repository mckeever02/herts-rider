<!-- Set the Page ID -->

<?php $page_id = 9; ?>

<?php include ("../../includes/variables.php"); ?>
<?php include ("$path/includes/doctype.php"); ?>

  <meta name="author" content="FirstCar">

  <?php include ("$path/includes/head.php"); ?>

</head>

<body id="<? echo $page[''.$page_id.'']['id'];?>" class="drawer drawer-right">

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="page-header dark imgix-fluid-bg dark-overlay" data-src="https://herts-rider.imgix.net/articles/<? echo $page[''.$page_id.'']['id'];?>/images/page-header.jpg?auto=format,enhance&fit=crop" role="banner">
        <?php include ("$path/includes/logo.php"); ?>
        <?php include ("$path/includes/menu.php"); ?>

        <div class="article-intro offset-by-six columns">
            <h1><? echo $page[''.$page_id.'']['title'];?></h1>
            <p><? echo $page[''.$page_id.'']['blurb'];?></p>
        </div>

        <?php include ("$path/includes/prev-next.php"); ?>
    </header>

    <article class="standard-article">

        <section class="container wow fadeInUp">

          <div class="longform-text-container">
            <p class="introduction">Your bike needs to be serviced regularly, but it’s also worth giving it the quick once over before every ride, to make sure it’s in good condition.</p>

            <p class="u-cf">So try to get into a routine that takes these key things into account. There are six of them and they spell out POWDER: Petrol, Oil, Water, Damage, Electrics and Rubber</p>

            <p>Keep on top of these half a dozen things and you’ll massively cut the chances of being in a crash while you’re on your bike.</p>


          </div><!-- /longform-text-container -->
        </section>

        <section class="container lined wow fadeInUp">
                  <div class="u-text-center">
                    <svg class="icon icon-article icon-section" x="0px" y="0px" width="165px" height="165px" viewBox="0 0 200 200">
                      <g>
                        <defs>
                          <rect id="SVGID_1_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                          <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_2_)" fill="#1D1D1B" d="M100,192.75c-51.143,0-92.75-41.607-92.75-92.75
                          C7.25,48.857,48.857,7.25,100,7.25c51.143,0,92.75,41.607,92.75,92.75C192.75,151.143,151.143,192.75,100,192.75 M100,11.25
                          c-48.937,0-88.75,39.813-88.75,88.75c0,48.937,39.813,88.75,88.75,88.75c48.937,0,88.75-39.813,88.75-88.75
                          C188.75,51.063,148.937,11.25,100,11.25"/>
                        <path clip-path="url(#SVGID_2_)" d="M143.774,70.34c-0.665-2.359-2.815-4.1-5.39-4.1c-2.132,0-3.969,1.204-4.923,2.964h-2.279
                          c-1.466,0-2.661,1.196-2.661,2.66c0,1.473,1.195,2.66,2.661,2.66h2.279c0.954,1.76,2.791,2.964,4.923,2.964
                          c1.593,0,3.024-0.665,4.047-1.733c1.369,1.059,2.262,2.696,2.262,4.56v40.264c0,3.19-2.593,5.782-5.78,5.782
                          c-3.19,0-5.788-2.592-5.788-5.782v-18.33c0-1.465-1.189-2.661-2.663-2.661h-5.788V61.394c0-1.464-1.187-2.66-2.66-2.66H71.572
                          c-1.473,0-2.66,1.196-2.66,2.66v74.552H52.636c-1.464,0-2.66,1.195-2.66,2.66c0,1.473,1.196,2.659,2.66,2.659h88.314
                          c1.464,0,2.66-1.187,2.66-2.659c0-1.465-1.196-2.66-2.66-2.66h-16.276v-31.035h3.128v15.668c0,6.128,4.983,11.111,11.111,11.111
                          c6.119,0,11.111-4.983,11.111-11.111V80.315C150.024,75.937,147.466,72.15,143.774,70.34 M119.353,85.602H74.234V64.056h45.119
                          V85.602z"/>
                      </g>
                    </svg>
                    <h2 class="color">Petrol</h2>
                  </div><!-- /u-text-center -->

                  <div class="row">

                    <div class="longform-text-container">
                      <p>It’s not only important to check that you have enough fuel for your journey, but also, if you decide to lay your bike up for a long period of time, be sure to brim your tank with fuel. Petrol, unlike other fuels, is extremely cold; when it sits in your tank it will generate condensation, which in turn will mix with the petrol. Water mixed with petrol is seriously bad news as it’ll seriously damage your engine.</p>
                    </div>

                  </div><!-- /row -->
                </section>

                <section class="container lined wow fadeIn">
                  <div class="u-text-center">
                    <svg class="icon icon-article icon-section" x="0px" y="0px" width="165px" height="165px" viewBox="0 0 200 200">
                      <g>
                        <defs>
                          <rect id="SVGID_1_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                          <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_2_)" fill="#1D1D1B" d="M100,192.75c-51.143,0-92.75-41.607-92.75-92.75
                          C7.25,48.857,48.857,7.25,100,7.25c51.143,0,92.75,41.607,92.75,92.75C192.75,151.143,151.143,192.75,100,192.75 M100,11.25
                          c-48.937,0-88.75,39.813-88.75,88.75c0,48.937,39.813,88.75,88.75,88.75c48.937,0,88.75-39.813,88.75-88.75
                          C188.75,51.063,148.937,11.25,100,11.25"/>
                        <path clip-path="url(#SVGID_2_)" d="M170.45,86.917l-11.672-7.521L113.739,95.41l-8.425-4.986H84.003v-2.778h9.153v-7.567H67.283
                          v7.567h9.153v2.778H52.642l-15.687-9.041L25,93.863l25.41,32.915l0.243-0.203v4.235h54.966l52.916-42.549l7.811,5.031
                          L170.45,86.917z M50.653,114.688L34.972,94.393l3.348-3.484l12.333,7.104V114.688z"/>
                        <path clip-path="url(#SVGID_2_)" d="M168.4,95.918c0,0-5.669,9.944-5.669,13.078c0,3.157,2.535,5.692,5.669,5.692
                          c3.128,0,5.664-2.559,5.664-5.692S168.4,95.918,168.4,95.918"/>
                      </g>
                    </svg>
                    <h2 class="color">Oil</h2>
                  </div><!-- /u-text-center -->

                  <div class="row">

                      <div class="longform-text-container">
                        <p>Check the oil level by using the dipstick or 'spyglass' in the side of the engine. Get the bike on its centre stand, or get someone to sit on the bike to keep it vertical. Never overfill your oil tank!</p>
                      </div>

                  </div><!-- /row -->
                </section>

                <section class="container lined wow fadeIn">
                  <div class="u-text-center">
                    <svg class="icon icon-article icon-section" x="0px" y="0px" width="165px" height="165px" viewBox="0 0 200 200">
                      <g>
                        <defs>
                          <rect id="SVGID_1_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                          <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_2_)" fill="#1D1D1B" d="M100,192.75c-51.143,0-92.75-41.607-92.75-92.75
                          C7.25,48.857,48.857,7.25,100,7.25c51.143,0,92.75,41.607,92.75,92.75C192.75,151.143,151.143,192.75,100,192.75 M100,11.25
                          c-48.937,0-88.75,39.813-88.75,88.75c0,48.937,39.813,88.75,88.75,88.75c48.937,0,88.75-39.813,88.75-88.75
                          C188.75,51.063,148.937,11.25,100,11.25"/>
                        <polygon clip-path="url(#SVGID_2_)" points="61.547,77.997 91.253,106.179 91.253,137.475 108.766,128.906 108.766,106.179
                          138.448,77.997 138.448,68.015 61.547,68.015   "/>
                        <rect x="56.786" y="58" clip-path="url(#SVGID_2_)" width="86.429" height="7.098"/>
                        <path clip-path="url(#SVGID_2_)" d="M100.003,142.626c0,0-6.562,11.512-6.562,15.139c0,3.655,2.935,6.59,6.562,6.59
                          c3.622,0,6.558-2.961,6.558-6.59C106.561,154.138,100.003,142.626,100.003,142.626"/>
                      </g>
                    </svg>
                    <h2 class="color">Water</h2>
                  </div><!-- /u-text-center -->

                  <div class="row">

                    <div class="longform-text-container">
                      <p>Check the level of the coolant, with the bike on its centre stand or with it vertical. If the level is low remember not to use tap water. Always top up with a mix of distilled water and anti-freeze. The latter stops the coolant freezing in the winter, and it also helps to stop your bike from overheating in the summer.</p>
                    </div>


                  </div><!-- /row -->
                </section>

                <section class="container lined wow fadeIn">
                  <div class="u-text-center">
                    <svg class="icon icon-article icon-section" x="0px" y="0px" width="165px" height="165px" viewBox="0 0 200 200">
                      <g>
                        <defs>
                          <rect id="SVGID_1_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                          <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_2_)" fill="#1D1D1B" d="M100,192.75c-51.143,0-92.75-41.607-92.75-92.75
                          C7.25,48.857,48.857,7.25,100,7.25c51.143,0,92.75,41.607,92.75,92.75C192.75,151.143,151.143,192.75,100,192.75 M100,11.25
                          c-48.937,0-88.75,39.813-88.75,88.75c0,48.937,39.813,88.75,88.75,88.75c48.937,0,88.75-39.813,88.75-88.75
                          C188.75,51.063,148.937,11.25,100,11.25"/>
                      </g>
                      <g>
                        <defs>
                          <rect id="SVGID_3_" x="41.503" y="41.167" width="116.995" height="117.666"/>
                        </defs>
                        <clipPath id="SVGID_4_">
                          <use xlink:href="#SVGID_3_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_4_)" d="M135.435,98.395l15.558-15.137c0.596-0.588,0.823-1.446,0.562-2.236
                          c-0.269-0.79-0.958-1.378-1.74-1.479l-22.952-3.345l3.613-23.113c0.135-0.824-0.227-1.639-0.916-2.101
                          c-0.664-0.462-1.547-0.53-2.27-0.135l-19.339,10.54l-9.422-19.104c-0.723-1.479-3.151-1.479-3.908,0l-9.909,20.062L63.927,51.841
                          c-0.756-0.395-1.639-0.303-2.295,0.194c-0.664,0.495-0.991,1.31-0.824,2.134l4.169,22.222l-21.633,3.152
                          c-0.79,0.101-1.48,0.689-1.74,1.479c-0.269,0.79-0.034,1.648,0.554,2.236l15.894,15.499l-15.927,15.985
                          c-0.555,0.589-0.79,1.445-0.488,2.235c0.261,0.748,0.95,1.345,1.774,1.438l22.155,2.892l-3.841,22.23
                          c-0.126,0.781,0.202,1.604,0.891,2.101c0.655,0.488,1.538,0.555,2.261,0.16l20.255-10.632l10.119,19.726
                          c0.362,0.723,1.11,1.186,1.9,1.186h0.067c0.824-0.034,1.538-0.496,1.9-1.253l9.262-19.466l19.894,10.439
                          c0.723,0.395,1.613,0.328,2.304-0.16c0.654-0.462,0.982-1.286,0.849-2.101l-3.968-23.113l22.356-3.614
                          c0.815-0.135,1.505-0.723,1.74-1.513c0.228-0.782,0.033-1.64-0.597-2.228L135.435,98.395z M121.18,114.279
                          c-0.488,0.067-0.95,0.361-1.244,0.757c-0.294,0.429-0.429,0.949-0.328,1.445l3.152,18.381l-15.826-8.304
                          c-0.462-0.227-0.983-0.294-1.479-0.126c-0.488,0.16-0.883,0.521-1.11,0.984l-7.328,15.431l-8.01-15.599
                          c-0.227-0.454-0.622-0.816-1.11-0.95c-0.168-0.067-0.361-0.102-0.563-0.102c-0.294,0-0.622,0.067-0.882,0.235l-16.054,8.43
                          l3.018-17.657c0.101-0.53-0.034-1.052-0.328-1.479c-0.328-0.429-0.79-0.689-1.286-0.757l-17.591-2.261l12.607-12.674
                          c0.328-0.362,0.555-0.858,0.555-1.379c-0.034-0.495-0.227-0.983-0.588-1.344L54.211,85.065l17.104-2.496
                          c0.521-0.067,0.983-0.328,1.277-0.757c0.328-0.428,0.429-0.949,0.328-1.445l-3.312-17.692l16.541,8.371
                          c0.462,0.227,0.992,0.294,1.479,0.126c0.496-0.16,0.891-0.521,1.085-0.983l7.849-15.885l7.456,15.095
                          c0.261,0.462,0.655,0.823,1.144,0.991c0.496,0.16,1.016,0.093,1.479-0.134l15.33-8.371l-2.857,18.347
                          c-0.059,0.53,0.033,1.026,0.361,1.446c0.294,0.395,0.724,0.689,1.252,0.756l18.223,2.631l-12.313,12.01
                          c-0.362,0.362-0.589,0.858-0.589,1.379c0.026,0.529,0.227,1.025,0.622,1.378l12.246,11.59L121.18,114.279z"/>
                      </g>
                      <g>
                        <defs>
                          <rect id="SVGID_5_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_6_">
                          <use xlink:href="#SVGID_5_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_6_)" d="M122.928,90.25l-11.362-1.673c-0.294-0.033-0.589-0.201-0.757-0.462
                          c-0.193-0.26-0.261-0.555-0.228-0.891l1.808-11.422l-9.522,5.186c-0.294,0.168-0.622,0.202-0.95,0.101
                          c-0.302-0.101-0.562-0.328-0.698-0.589l-4.622-9.388l-4.892,9.876c-0.134,0.269-0.395,0.496-0.689,0.597
                          c-0.302,0.092-0.63,0.059-0.924-0.068L79.82,76.298l2.068,10.994c0.059,0.327-0.034,0.655-0.202,0.924
                          c-0.194,0.261-0.454,0.42-0.782,0.454l-10.64,1.58l7.816,7.615c0.227,0.202,0.362,0.529,0.362,0.824
                          c0,0.327-0.135,0.622-0.362,0.848l-7.85,7.884l10.935,1.411c0.327,0.034,0.622,0.193,0.815,0.454
                          c0.202,0.27,0.269,0.598,0.202,0.926l-1.874,10.968l9.984-5.229c0.16-0.093,0.362-0.16,0.555-0.16c0.135,0,0.227,0.034,0.362,0.067
                          c0.293,0.093,0.529,0.294,0.688,0.589l4.96,9.683l4.562-9.582c0.136-0.294,0.361-0.495,0.689-0.597
                          c0.294-0.126,0.622-0.093,0.916,0.067l9.816,5.161l-1.967-11.432c-0.033-0.294,0.034-0.622,0.228-0.882
                          c0.169-0.269,0.463-0.429,0.757-0.496l11.035-1.773l-7.623-7.186c-0.228-0.235-0.361-0.529-0.361-0.857
                          c0-0.328,0.134-0.622,0.328-0.849L122.928,90.25z"/>
                      </g>
                    </svg>
                    <h2 class="color">Damage</h2>
                  </div><!-- /u-text-center -->

                  <div class="row">

                    <div class="longform-text-container">
                      <p>Check your bike for damage, which will need to be fixed as soon as possible. The sorts of things that you’re checking include:</p>
                      <ul class="medium-list">
                        <li>The fairings</li>
                        <li>The light lenses</li>
                        <li>Brake and coolant hoses</li>
                        <li>Cracks in the bike’s frame</li>
                        <li>Missing fairing bolts</li>
                        <li>Dents to the wheel rims from potholes.</li>
                        <li>Check for loose brake calliper bolts from vibration</li>
                        <li>Cuts or scrapes to the wiring harness</li>
                        <li>Damage to your crash helmet or clothing. If you accidentally drop your helmet, don’t wear it until you’ve had a specialist examine it first.</li>
                      </ul>
                    </div>




                  </div><!-- /row -->

                </section>

                <section class="container lined wow fadeIn">
                  <div class="u-text-center">
                    <svg class="icon icon-article icon-section" x="0px" y="0px" width="165px" height="165px" viewBox="0 0 200 200">
                      <g>
                        <defs>
                          <rect id="SVGID_1_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                          <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_2_)" fill="#1D1D1B" d="M100,192.75c-51.143,0-92.75-41.607-92.75-92.75
                          C7.25,48.857,48.857,7.25,100,7.25c51.143,0,92.75,41.607,92.75,92.75C192.75,151.143,151.143,192.75,100,192.75 M100,11.25
                          c-48.937,0-88.75,39.813-88.75,88.75c0,48.937,39.813,88.75,88.75,88.75c48.937,0,88.75-39.813,88.75-88.75
                          C188.75,51.063,148.937,11.25,100,11.25"/>
                        <path clip-path="url(#SVGID_2_)" d="M104.074,104.349l-6.895,6.895l-8.423-8.424l6.895-6.894c1.527-1.528,1.527-4.015,0-5.543
                          c-1.528-1.527-4.014-1.527-5.543,0l-6.894,6.895l-3.463-3.463c-0.918-0.918-2.407-0.918-3.325,0l-5.002,5.003
                          c-0.919,0.918-0.919,2.407,0,3.325l0.746,0.747l-11.304,11.303c-0.525,0.526-0.771,1.27-0.662,2.006l1.742,11.771l-9.139,9.138
                          c-0.918,0.919-0.918,2.407,0,3.325l6.761,6.76c0.919,0.919,2.407,0.919,3.325,0l9.138-9.138l11.77,1.741
                          c0.736,0.109,1.48-0.136,2.007-0.663l11.303-11.303l0.746,0.747c0.919,0.917,2.407,0.917,3.326,0l5.002-5.002
                          c0.917-0.919,0.917-2.408,0-3.326l-3.464-3.462l6.896-6.896c1.528-1.528,1.528-4.015,0-5.542
                          C108.089,102.82,105.604,102.82,104.074,104.349"/>
                        <path clip-path="url(#SVGID_2_)" d="M147.191,59.569l-6.761-6.761c-0.918-0.918-2.407-0.918-3.325,0l-9.139,9.139l-11.769-1.743
                          c-0.736-0.109-1.481,0.137-2.008,0.664l-11.302,11.303l-0.747-0.747c-0.918-0.918-2.407-0.918-3.325,0l-5.003,5.003
                          c-0.918,0.917-0.918,2.406,0,3.324l26.434,26.434c0.918,0.918,2.407,0.918,3.325,0l5.003-5.002c0.917-0.919,0.917-2.408,0-3.325
                          l-0.748-0.747l11.304-11.303c0.526-0.526,0.771-1.27,0.663-2.007l-1.743-11.769l9.14-9.139
                          C148.11,61.977,148.11,60.486,147.191,59.569"/>
                      </g>
                    </svg>
                    <h2 class="color">Electrics</h2>
                  </div><!-- /u-text-center -->

                  <div class="row">

                    <div class="longform-text-container">
                      <p>Complete a full lights check before each ride. Remember to check both the foot and the handbrake switches and give the horn a quick blip. If you're planning to lay the bike up for a while, invest in a trickle charger to keep the battery in good nick until your next ride.</p>
                    </div>


                  </div><!-- /row -->

                </section>

                <section class="container lined wow fadeIn">
                  <div class="u-text-center">
                    <svg class="icon icon-article icon-section" x="0px" y="0px" width="165px" height="165px" viewBox="0 0 200 200">
                      <g>
                        <defs>
                          <rect id="SVGID_1_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                          <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_2_)" fill="#1D1D1B" d="M100,192.75c-51.143,0-92.75-41.607-92.75-92.75
                          C7.25,48.857,48.857,7.25,100,7.25c51.143,0,92.75,41.607,92.75,92.75C192.75,151.143,151.143,192.75,100,192.75 M100,11.25
                          c-48.937,0-88.75,39.813-88.75,88.75c0,48.937,39.813,88.75,88.75,88.75c48.937,0,88.75-39.813,88.75-88.75
                          C188.75,51.063,148.937,11.25,100,11.25"/>
                        <path clip-path="url(#SVGID_2_)" d="M100,45.521c-30.04,0-54.479,24.439-54.479,54.479c0,30.041,24.439,54.479,54.479,54.479
                          c30.042,0,54.479-24.438,54.479-54.479C154.479,69.96,130.041,45.521,100,45.521 M100,138.694
                          c-21.37,0-38.694-17.324-38.694-38.694S78.63,61.306,100,61.306c21.372,0,38.694,17.324,38.694,38.694S121.371,138.694,100,138.694
                          "/>
                        <path clip-path="url(#SVGID_2_)" d="M100,66.317c-18.573,0-33.683,15.109-33.683,33.683c0,18.574,15.11,33.685,33.683,33.685
                          c18.574,0,33.687-15.11,33.687-33.685C133.687,81.426,118.573,66.317,100,66.317 M129.371,97.853h-16.343
                          c-0.335-2.067-1.152-3.971-2.328-5.599l11.539-11.538C126.288,85.379,128.897,91.324,129.371,97.853 M102.113,70.626
                          c6.525,0.466,12.468,3.065,17.133,7.103l-11.532,11.536c-1.632-1.177-3.535-1.992-5.601-2.327V70.626z M97.886,70.626v16.312
                          c-2.065,0.335-3.969,1.15-5.597,2.327L80.751,77.729C85.418,73.691,91.361,71.092,97.886,70.626 M77.76,80.716l11.537,11.538
                          c-1.176,1.628-1.991,3.532-2.323,5.597H70.628C71.104,91.324,73.711,85.381,77.76,80.716 M70.625,102.08h16.35
                          c0.332,2.065,1.149,3.969,2.326,5.598l-11.572,11.571C73.683,114.573,71.083,108.618,70.625,102.08 M97.886,129.373
                          c-6.542-0.466-12.499-3.076-17.171-7.133l11.574-11.574c1.628,1.177,3.532,1.992,5.597,2.327V129.373z M97.886,108.646v0.028
                          c-0.911-0.221-1.768-0.581-2.547-1.057l0.018-0.021c-1.219-0.744-2.245-1.769-2.986-2.989l-0.021,0.018
                          c-0.477-0.778-0.837-1.634-1.06-2.547h0.031c-0.165-0.678-0.261-1.384-0.261-2.114c0-0.729,0.096-1.433,0.261-2.113h-0.031
                          c0.223-0.911,0.583-1.766,1.06-2.547l0.021,0.02c0.741-1.221,1.767-2.245,2.986-2.989l-0.018-0.02
                          c0.779-0.477,1.636-0.837,2.547-1.058v0.029c0.68-0.163,1.384-0.262,2.113-0.262c0.73,0,1.437,0.099,2.116,0.262v-0.029
                          c0.911,0.221,1.767,0.581,2.546,1.058l-0.019,0.02c1.221,0.742,2.245,1.768,2.989,2.989l0.019-0.02
                          c0.478,0.779,0.838,1.636,1.06,2.547h-0.029c0.163,0.68,0.261,1.386,0.261,2.113c0,0.73-0.098,1.436-0.261,2.116h0.029
                          c-0.222,0.911-0.582,1.769-1.06,2.548l-0.019-0.021c-0.744,1.221-1.771,2.245-2.989,2.989l0.019,0.021
                          c-0.779,0.476-1.635,0.836-2.546,1.057v-0.028c-0.679,0.163-1.386,0.261-2.116,0.261C99.271,108.906,98.566,108.811,97.886,108.646
                           M102.113,129.373v-16.38c2.065-0.335,3.969-1.15,5.601-2.327l11.57,11.574C114.612,126.297,108.657,128.907,102.113,129.373
                           M122.271,119.249l-11.57-11.571c1.177-1.629,1.992-3.532,2.327-5.598h16.347C128.917,108.618,126.317,114.573,122.271,119.249"/>
                      </g>
                    </svg>
                    <h2 class="color">Rubber</h2>
                  </div><!-- /u-text-center -->

                  <div class="row">

                    <div class="longform-text-container">
                      <p>The tyres are the only thing that keeps your bike in contact with the road, so their condition is key. There are several checks you need to make:</p>
                      <ul class="medium-list">
                        <li>Check the pressures when the tyres are cold because the pressure will read higher when they’re hot, giving a false reading.</li>
                        <li>Check the valve to ensure it’s not leaking. </li>
                        <li>See that the tread depth of both tyres is greater than 1.0mm, as this is the minimum for motorcycle tyres in the UK.</li>
                        <li>Clear out any small stones from within the tread and ensure there’s nothing penetrating the tyre such as screws or nails. </li>
                        <li>Check both walls of each tyre to make sure there are no cracks starting to form due to lack of use or age.</li>
                      </ul>
                    </div>

                  </div><!-- /row -->

                </section>

                <section class="container">
                  <div class="longform-text-container">
                    <p>Clearly, whoever came up with the POWDER checks couldn’t also weave an extra couple of letters in there, because there are another two areas that you should analyse regularly, to stay shiny side up:</p>
                  </div>
                </section>

                <section class="container lined wow fadeIn">
                  <div class="u-text-center">
                    <svg class="icon icon-article icon-section" x="0px" y="0px" width="165px" height="165px" viewBox="0 0 200 200">
                      <g>
                        <defs>
                          <rect id="SVGID_1_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                          <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_2_)" fill="#1D1D1B" d="M100,192.75c-51.143,0-92.75-41.607-92.75-92.75
                          C7.25,48.857,48.857,7.25,100,7.25c51.143,0,92.75,41.607,92.75,92.75C192.75,151.143,151.143,192.75,100,192.75 M100,11.25
                          c-48.937,0-88.75,39.813-88.75,88.75c0,48.937,39.813,88.75,88.75,88.75c48.937,0,88.75-39.813,88.75-88.75
                          C188.75,51.063,148.937,11.25,100,11.25"/>
                        <path clip-path="url(#SVGID_2_)" d="M101.265,55.553c-1.272,0-2.531,0.05-3.777,0.148v9.911c0,2.422-1.894,4.426-4.312,4.561
                          c-3.251,0.182-6.39,0.942-9.33,2.259c-2.946,1.319-5.615,3.163-7.933,5.481s-4.162,4.987-5.481,7.933
                          c-1.317,2.94-2.077,6.079-2.259,9.33c-0.135,2.418-2.139,4.312-4.561,4.312h-9.911c-0.098,1.246-0.148,2.506-0.148,3.777
                          c0,26.351,21.361,47.712,47.712,47.712c26.351,0,47.712-21.361,47.712-47.712C148.977,76.914,127.615,55.553,101.265,55.553
                           M121.752,123.752c-5.474,5.472-12.748,8.485-20.487,8.485c-7.739,0-15.015-3.014-20.487-8.485
                          c-5.472-5.474-8.486-12.748-8.486-20.487c0-7.739,3.014-15.015,8.486-20.487c5.472-5.472,12.748-8.486,20.487-8.486
                          c7.739,0,15.014,3.014,20.487,8.486c5.472,5.472,8.485,12.748,8.485,20.487C130.237,111.004,127.224,118.278,121.752,123.752"/>
                        <path clip-path="url(#SVGID_2_)" d="M101.265,79.864c-12.903,0-23.4,10.497-23.4,23.4s10.497,23.401,23.4,23.401
                          s23.401-10.498,23.401-23.401S114.168,79.864,101.265,79.864 M101.265,84.921c1.446,0,2.619,1.172,2.619,2.619
                          c0,1.446-1.173,2.619-2.619,2.619s-2.62-1.172-2.62-2.619C98.645,86.093,99.818,84.921,101.265,84.921 M85.384,106.039
                          c-1.446,0-2.619-1.172-2.619-2.619c0-1.446,1.173-2.619,2.619-2.619c1.447,0,2.62,1.173,2.62,2.619
                          C88.004,104.867,86.831,106.039,85.384,106.039 M101.265,121.92c-1.446,0-2.62-1.173-2.62-2.62c0-1.446,1.173-2.618,2.62-2.618
                          s2.619,1.172,2.619,2.618C103.884,120.747,102.711,121.92,101.265,121.92 M101.265,111.626c-4.618,0-8.361-3.744-8.361-8.361
                          c0-4.618,3.744-8.361,8.361-8.361c4.617,0,8.361,3.744,8.361,8.361C109.626,107.882,105.882,111.626,101.265,111.626
                           M119.765,103.42c0,1.446-1.174,2.619-2.619,2.619c-1.447,0-2.62-1.172-2.62-2.619c0-1.446,1.173-2.619,2.62-2.619
                          C118.591,100.801,119.765,101.974,119.765,103.42"/>
                        <path clip-path="url(#SVGID_2_)" d="M48.807,96.702h14.806c0.945,0,1.726-0.738,1.779-1.682c0.404-7.209,3.405-13.93,8.552-19.077
                          c5.146-5.146,11.867-8.147,19.076-8.551c0.944-0.053,1.682-0.834,1.682-1.779V50.807c0-0.984-0.796-1.784-1.772-1.784
                          c-0.022,0-0.045,0.001-0.068,0.001c-24.887,0.944-44.894,20.951-45.838,45.838C46.985,95.868,47.799,96.702,48.807,96.702"/>
                      </g>
                    </svg>
                    <h2 class="color">Brakes</h2>
                  </div><!-- /u-text-center -->

                  <div class="row">

                    <div class="longform-text-container">
                      <p>Wheel the bike along and feel for resistance, indicating binding callipers or warped discs. Check the brakes bite when you squeeze the lever, that the pads have plenty of wear left and that they’re seated correctly in the callipers. Finally, check the level of the fluid in the brake reservoir mounted on your handlebars – it should be within the marked area.</p>
                    </div>

                  </div><!-- /row -->

                </section>

                <section class="container lined wow fadeIn">
                  <div class="u-text-center">
                    <svg class="icon icon-article icon-section" x="0px" y="0px" width="165px" height="165px" viewBox="0 0 200 200">
                      <g>
                        <defs>
                          <rect id="SVGID_1_" width="200" height="200"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                          <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#SVGID_2_)" d="M122.274,112.834c-4.972,0.097-8.744-2.007-11.177-6.323c-2.585-4.589-3.066-9.663,0.44-13.585
                          c7.2-8.051,8.742-17.043,6.909-27.298c-0.958-5.359,2.716-10.933,7.678-13.174c5.025-2.27,10.593-1.158,14.51,2.898
                          c4.071,4.216,4.844,9.661,2.117,14.974c-0.206,0.401-0.391,0.841-0.691,1.163c-7.463,7.975-8.625,17.345-6.895,27.748
                          C136.371,106.484,129.882,112.854,122.274,112.834 M127.155,100.122c-0.203-3.051-1.776-5.054-4.725-5.052
                          c-2.791,0-4.91,1.55-4.931,4.717c-0.022,3.216,1.724,5.177,4.92,5.196C125.465,105.002,126.909,102.991,127.155,100.122 M136.23,64
                          c-0.208-2.651-1.573-4.618-4.672-4.587c-3.208,0.031-4.941,1.942-4.964,5.109c-0.022,3.162,1.929,4.539,4.902,4.5
                          C134.541,68.982,136.143,67.352,136.23,64"/>
                        <path clip-path="url(#SVGID_2_)" d="M56.808,154.118c-7.9-0.537-13.851-7.521-12.812-14.521
                          c1.135-7.652,8.308-12.872,15.732-11.178c4.904,1.119,9.789,1.715,14.78,1.062c2.043-0.267,3.223,0.244,3.09,2.56
                          c-0.218,3.821,0.138,7.517,2.359,10.835c0.836,1.249,0.646,2.312-1.094,2.568c-5.99,0.885-10.92,4.137-16.008,7.072
                          C60.878,153.658,58.653,154.144,56.808,154.118 M56.946,145.897c2.958-0.319,4.906-1.896,4.849-5.132
                          c-0.056-3.098-2.02-4.513-4.975-4.51c-3.121,0.002-4.633,1.795-4.633,4.798C52.186,144.042,53.661,145.796,56.946,145.897"/>
                        <path clip-path="url(#SVGID_2_)" d="M84.288,110.93c-4.423-0.207-8.32-2.597-10.57-7.438c-2.332-5.02-1.636-9.759,1.896-13.909
                          c3.429-4.031,8-5.476,13.051-3.984c5.869,1.733,11.151,5.388,17.599,5.273c1.09-0.019,1.68,0.896,1.322,1.891
                          c-1.513,4.213-1.862,8.468-0.904,12.851c0.181,0.827-0.401,1.59-1.249,1.523c-6.964-0.548-13.188,2.704-19.828,3.789
                          C85.458,110.95,85.304,110.93,84.288,110.93 M90.053,97.824c-0.194-2.656-1.536-4.785-4.592-4.779
                          c-3.112,0.006-5.038,1.836-5.005,5.117c0.032,3.1,1.989,4.796,4.84,4.802C88.204,102.971,89.942,101.158,90.053,97.824"/>
                        <path clip-path="url(#SVGID_2_)" d="M106.673,133.702c-0.083,7.259-6.262,13.413-12.845,13.436
                          c-6.775,0.021-12.955-5.747-12.9-12.496c0.051-6.145,1.659-12.249,0.464-18.441c-0.269-1.394,0.722-1.967,1.886-1.904
                          c3.871,0.208,7.431-0.91,10.961-2.29c1.55-0.606,2.737-0.063,3.105,1.58c1.122,5.012,4.347,8.887,6.948,13.099
                          C105.749,129.044,106.647,131.556,106.673,133.702 M88.657,133.879c0.204,3.233,1.87,5.141,4.784,5.191
                          c3.113,0.056,5.2-1.997,5.261-5.042c0.063-3.19-2.137-4.892-5.298-4.831C90.349,129.257,88.868,131.127,88.657,133.879"/>
                        <path clip-path="url(#SVGID_2_)" fill="#1D1D1B" d="M100,192.75c-51.143,0-92.75-41.607-92.75-92.75
                          C7.25,48.857,48.857,7.25,100,7.25c51.143,0,92.75,41.607,92.75,92.75C192.75,151.143,151.143,192.75,100,192.75 M100,11.25
                          c-48.937,0-88.75,39.813-88.75,88.75c0,48.937,39.813,88.75,88.75,88.75c48.937,0,88.75-39.813,88.75-88.75
                          C188.75,51.063,148.937,11.25,100,11.25"/>
                      </g>
                    </svg>
                    <h2 class="color">Chain</h2>
                  </div><!-- /u-text-center -->

                  <div class="row">

                    <div class="longform-text-container">
                      <p>Check the tension of the chain; it should have around an inch of slack, but check the manual for the correct settings. If possible put the bike on a paddock stand and spin the rear wheel with your hand and inspect, lubricate and clean your chain regularly. Tight spots, worn sprockets and rust could indicate either adjustment or replacement is necessary.</p>
                    </div>

                  </div><!-- /row -->

                </section>






        <?php include ("$path/includes/article-social-share.php"); ?>

    </article>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

   <?php include ("$path/includes/scripts.php"); ?>

</body>
</html>
