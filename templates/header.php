<header class="banner">
  <div class="container">
    <nav class="navbar">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/InboundRx_Logo_Nav.png" alt="InboundRx"></a>
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        &#9776;
      </button>
      <div class="collapse navbar-toggleable-md" id="navbarCollapse">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'pull-xs-right nav navbar-nav']);
          endif;
          ?>
      </div>
    </nav>
  </div>
</header>
