<?php
  /**
  * Featured statistics partial
  */
?>

<div class="row">
  <div class="stats">
    <a href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset" class="stat__link">
      <div class="stat__wrapper">
        <div class="stat">
          <div class="stat__value counter"><?php echo get_dataset_count_from_cache(); ?></div>
          <div class="stat__description"><?php _e('Dataset_count', 'sixodp');?></div>
        </div>
      </div>
    </a>
    <a href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/showcase" class="stat__link">
      <div class="stat__wrapper">
        <div class="stat">
          <div class="stat__value counter"><?php echo get_showcases_count_from_cache(); ?></div>
          <div class="stat__description"><?php _e('Application_count', 'sixodp');?></div>
        </div>
      </div>
    </a>
    <a href="<?php echo get_api_link_from_cache() ?>" class="stat__link">
      <div class="stat__wrapper">
        <div class="stat">
          <div class="stat__value counter"><?php echo get_api_count_from_cache(); ?></div>
          <div class="stat__description"><?php _e('Interfaces', 'sixodp');?></div>
        </div>
      </div>
    </a>
  </div>
</div>
