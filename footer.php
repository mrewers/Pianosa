  </div> <!-- End main-content -->
  
  <footer>
    <div class="content-wrap footer-wrap">
      <?php wp_nav_menu( array('theme_location'=>'footer_nav') ); ?>
      <div class="theme-tagline"><a href="https://github.com/mrewers/Pianosa">Powered by Pianosa</a></div>
      <h3 class="site-title-header"><?php bloginfo( 'name' ); ?></h3>
    </div> <!-- End footer-content -->
  </footer>

  <?php wp_footer(); ?>

  </body>
</html>