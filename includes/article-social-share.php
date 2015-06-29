<section class="social-share container u-center">
    <p class="small-text">Did you like this article? <br/> Subscribe to our Newsletter or Share it with your friends</p>

    <!-- Newsletter -->
    <?=$success?>
    <div id="form-container" class="group">

        <form id="contact-form" name="contact-form" method="post" action="../../submit.php#form-container">
            <input type="text" placeholder="Enter your email" class="validate[required,custom[email]]" name="email" id="email" value="<?=(isset($_SESSION['post']['email']) ? $_SESSION['post']['email'] : '');?>" />
            <input type="submit" name="button" value="Subscribe" />
            <?=$str?>
        </form>
    </div> <!--/form container -->

    <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=hhttp://firstcarmedia.co.uk/articles/<? echo $page[''.$page_id.'']['id'];?>&p[images][0]=http://firstcarmedia.co.uk/&p[title]=<? echo $page[''.$page_id.'']['title'];?>&p[summary]=" class="button-tertiary button-social button-facebook" target="_blank">
      <svg class="icon" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40">
        <g>
          <path d="M18,20.664h-2V18h2v-2.336C18,13.781,19.188,12,22,12c1.133,0,2,0.148,2,0.148l-0.109,2.516h-1.727
            C21.148,14.664,21,15.219,21,16v2h3l-0.203,2.664H21V28h-3V20.664z"/>
        </g>
      </svg>
    </a>
    <a href="http://twitter.com/home?status=<? echo $page[''.$page_id.'']['title'];?> @FirstCarUK: http://firstcarmedia.co.uk/articles/<? echo $page[''.$page_id.'']['id'];?>" class="button-tertiary button-social button-twitter" target="_blank">
      <svg class="icon" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40">
        <g>
          <path d="M26.367,16.734c0,0.148,0,0.281,0,0.43c0,4.336-3.297,9.336-9.328,9.336c-1.852,0-3.594-0.406-5.039-1.336
            c0.258,0.039,0.516,0.055,0.781,0.055c1.531,0,2.961-0.664,4.07-1.555c-1.422-0.016-2.648-0.984-3.055-2.281
            c0.203,0.039,0.406,0.062,0.609,0.062c0.297,0,0.594-0.039,0.875-0.117c-1.5-0.297-2.633-1.625-2.633-3.219
            c0-0.016,0-0.016,0-0.039c0.445,0.242,0.945,0.391,1.484,0.406c-0.891-0.594-1.469-1.594-1.469-2.719
            c0-0.609,0.172-1.109,0.445-1.594c1.633,1.984,4.039,3.219,6.758,3.367c-0.055-0.234-0.07-0.5-0.07-0.758
            c0-1.812,1.461-3.273,3.273-3.273c0.945,0,1.797,0.406,2.414,1.031c0.734-0.148,1.445-0.422,2.07-0.797
            c-0.242,0.766-0.758,1.414-1.445,1.82c0.672-0.078,1.297-0.258,1.891-0.523C27.555,15.703,27,16.273,26.367,16.734z"/>
        </g>
      </svg>
    </a>
    <a href="mailto:?subject=<? echo $page[''.$page_id.'']['title'];?> article&body=Check this article out: http://firstcarmedia.co.uk/articles/<? echo $page[''.$page_id.'']['id'];?>" class="button-tertiary button-social button-email" target="_blank">
      <svg class="icon" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40">
        <g>
          <path d="M20,21l-8-6c0-0.555,0.445-1,1-1h14c0.555,0,1,0.445,1,1L20,21z M20,22.797l8-6V25c0,0.555-0.445,1-1,1H13
            c-0.555,0-1-0.445-1-1v-8.203L20,22.797z"/>
        </g>
      </svg>
    </a>

</section>