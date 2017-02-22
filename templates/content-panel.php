<div class="triptych-panel-title">
    <?php the_sub_field('triptych_panel_title'); ?>
</div>
<div class="triptych-panel-body" id="triptych-panel-<?php echo $panel_id; ?>-content" style="display:<?php echo $panel_display[0]; ?>;">
                              
<?php the_sub_field('triptych_panel_content'); ?>

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

<div class="triptych-panel-corner-ll">
  <?php if( get_sub_field('triptych_panel_page_link') ): ?>
  <a href="<?php the_sub_field('triptych_panel_page_link'); ?>" class="btn btn-sm btn-info"><?php the_sub_field('triptych_panel_page_link_button'); ?></a>
  <?php endif; ?>
</div>

</div>

<div class="triptych-panel-body <?php echo $panel_display[2]; ?>" id="triptych-panel-<?php echo $panel_id; ?>-image" style="display:<?php echo $panel_display[1]; ?>; background-image:url(<?php echo the_sub_field('triptych_panel_image'); ?>)">
</div>