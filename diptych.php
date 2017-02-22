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
                    <div class="triptych-panel-title">
                      <?php the_sub_field('triptych_panel_title'); ?>
                    </div>
                    <div class="triptych-panel-body" id="triptych-panel-<?php echo $panel_id; ?>-content" style="display:<?php echo $panel_display[0]; ?>;">
                      <?php the_sub_field('triptych_panel_content'); ?>
                      <div class="triptych-panel-corner-ll">
                        <?php if( get_sub_field('triptych_panel_page_link') ): ?>
                        <a href="<?php the_sub_field('triptych_panel_page_link'); ?>" class="btn btn-sm btn-info"><?php the_sub_field('triptych_panel_page_link_button'); ?></a>
                        <?php endif; ?>
                      </div>

                    <div class="triptych-panel-corner-lr">
                      <?php if( get_sub_field('triptych_panel_modal_content') ): ?>
                      <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#triptych-panel-<?php echo $panel_id; ?>-modal">?</button>
                      <div class="modal fade" id="triptych-panel-<?php echo $panel_id; ?>-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><?php the_sub_field('triptych_panel_title'); ?></h5>
                            </div>
                            <div class="modal-body">
                              <?php echo the_sub_field('triptych_panel_modal_content'); ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endif; ?>
                      <?php if( get_sub_field('triptych_panel_image') ): ?>
                      <button type="button" class="btn btn-sm btn-secondary triptych-panel-unflip">X</button>
                      <?php endif; ?>
                    </div>

                    </div>
                    <div class="triptych-panel-body <?php echo $panel_display[2]; ?>" id="triptych-panel-<?php echo $panel_id; ?>-image" style="display:<?php echo $panel_display[1]; ?>; background-image:url(<?php echo the_sub_field('triptych_panel_image'); ?>)">
                    </div>
                  </div>
                  <?php if ( $panel_id % 2 == 0 ): ?></div><?php endif; ?>
                </div>
        	    <?php endwhile; ?>
          <?php endif; ?>

          
        </div>
      </div>
          
        

     

        
	</main><!-- .site-main -->
</div><!-- .content-area -->
