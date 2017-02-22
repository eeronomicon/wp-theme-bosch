<?php
/**
 * Template Name: Diptych
 * @package WordPress
 * @subpackage Bosch
 * @since Bosch 0.6
 */
get_template_part('templates/page', 'header'); ?>

<div id="primary">
	<main id="main" class="site-main" role="main">
	    <?php if( get_field('triptych_title') ): ?>
        <h2><?php the_field('triptych_title'); ?></h2>
      <?php endif; ?>
      <div class="triptych-row">
        <div class="triptych">
          <div class="triptych-panel-left">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( get_the_content() ) { ?>
              <div class="triptych-panel-title"><?php echo the_title(); ?></div>
            <div class="triptych-panel-body" style="height:auto !important;">
                <?php the_content(); ?>
            </div>
            <?php }; ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
        <div class="diptych-area">

          <?php if( have_rows('triptych_panel') ): ?>
            <?php $panel_id = 0; ?>
            <?php while ( have_rows('triptych_panel') ) : the_row(); ?>
              <?php $panel_id++; ?>
                <?php if ( $panel_id % 2 != 0 ): ?><div class="diptych-row"><?php endif; ?>
                  <div class="diptych">
                  <?php if( get_sub_field('triptych_panel_image') ) {
                      $panel_display = array('none','inline',' triptych-panel-clickable');
                    } else {
                      $panel_display = array('inline','none','');
                    }
                    ?>
                  <div class="<?php if ($panel_id % 2 != 0) {
                        echo "triptych-panel-middle";
                      } else {
                        echo "triptych-panel-right";
                      } ?>">

                    <?php include(locate_template('templates/content-panel.php')); ?>
                   
                  </div>
                  <?php if ( $panel_id % 2 == 0 ): ?></div><?php endif; ?>
                </div>
        	    <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
        
	</main><!-- .site-main -->
</div><!-- .content-area -->
