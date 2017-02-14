<?php
/**
 * Template Name: Triptych
 * @package WordPress
 * @subpackage InboundRx
 * @since InboundRx 0.2
 */
get_template_part('templates/page', 'header'); ?>

<div id="primary">
	<main id="main" class="site-main" role="main">
        <h2><?php the_field('triptych_title'); ?></h2>
	    <?php if( have_rows('triptych_panel') ): ?>
	       <?php $panel_id = 0; ?>
	       <div class="triptych-row">
	           <?php while ( have_rows('triptych_panel') ) : the_row(); ?>
	               <?php $panel_id++; ?>
                    <div class="triptych">
                        <div class="<?php if ($panel_id == 1) {
                            echo "triptych-panel-left";
                        } elseif ($panel_id == 2) {
                            echo "triptych-panel-middle";
                        } else {
                            echo "triptych-panel-right";
                        } ?>">
                          <div class="triptych-panel-title">
                            <?php the_sub_field('triptych_panel_title'); ?>
                          </div>
                          <div class="triptych-panel-body" id="triptych-panel-<?php echo $panel_id; ?>">
                            <?php the_sub_field('triptych_panel_content'); ?>
                          </div>
                        </div>
                    </div>
        	    <?php endwhile; ?>
           </div>
        <?php endif; ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
