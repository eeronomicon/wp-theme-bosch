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
	    <?php if( have_rows('triptych_panel') ): ?>
	   
	       <div class="triptych-row">
	           
	           <?php while ( have_rows('triptych_panel') ) : the_row(); ?>
	           
                    <div class="triptych">
                        <div class="triptych-panel-left">
                          <div class="triptych-panel-title">
                            <?php the_sub_field('triptych_panel_title'); ?>
                          </div>
                          <div class="triptych-panel-body">
                            <?php the_sub_field('triptych_panel_content'); ?>
                          </div>
                        </div>
                    </div>
        
        	    <?php endwhile; ?>
	           
           </div>
	        
        <?php endif; ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
