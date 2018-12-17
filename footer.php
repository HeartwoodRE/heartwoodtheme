    <!-- Begin WP Footer -->
    <div class="container-footer">
      <div class="container-footerContent">
        <div class="container-divider">
          <div id="divider">
            <hr>
          </div>
        </div>
        <div class="container-follow">
          <div class="container-followContent">
            <div class="container-followBlock">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook" width="50px" height="35px"/>
            </div>
            <div class="container-followBlock">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram" width="50px" height="35px"/>
            </div>
            <div class="container-followBlock">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pinterest.svg" alt="Pinterest" width="50px" height="35px"/>
            </div>
            <div class="container-followBlock">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="Twitter" width="50px" height="35px"/>
            </div>
          </div>
        </div>

        <div class="container-divider">
          <div id="divider">
            <hr>
          </div>
        </div>

        <div class="container-bottomtext">
          <p>The Heartwood Team <br>
            team@heartwoodrealestatepdx.com | 503-443-5743 <br>

            Licensed Oregon Real Estate Brokers <br>
            Premiere Property Group, LLC <br>
            1500 NW Bethany Blvd #190 <br>
            Beaverton, OR 97006 <br>
          </p>
        </div>
        <div class="container-copyright" style="text-align: center; vertical-align: middle; font-size: 8px; padding: 5px;">
          <p>
            &copy; <?php echo date('Y'); ?> heartwoodrealestatepdx.com
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php wp_footer(); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/js/lib/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery-3.3.1.min.js"><\/script>')</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js"></script>
  <script>window.Vue || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/lib/vue-v2.5.16.js"><\/script>')</script>
  <script src="https://unpkg.com/vue-instagram"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-129429491-1', 'auto'); ga('send', 'pageview')
  </script>
</body>

</html>
