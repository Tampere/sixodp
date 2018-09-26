<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Sixodp
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main wrapper" role="main">

    <?php get_template_part('partials/page-hero'); ?>

    <div class="toolbar-wrapper">
      <div class="toolbar">
        <div class="container">
          <ol class="breadcrumb">
            <li><a href="<?php echo get_home_url() ?>"><?php _e('Home', 'sixodp') ?></a></li>
            <li><a href="<?php echo home_url( $wp->request ) ?>"><?php _e('Showcase ideas', 'sixodp') ?></a></li>
          </ol>
        </div>
      </div>
      <div class="toolbar--site-subtitle">
        <h1><?php _e('Showcase ideas', 'sixodp') ?></h1>
      </div>
    </div>

    <div class="page-content container">
      <div class="wrapper">
        <div class="row">
          <div class="news-content">
            <div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-8 col-sm-8 col-xs-8">
              <?php $showcase_idea = get_permalink(get_translated_page_by_title('Uusi sovellusidea')); ?>
              <a href="<?php echo $showcase_idea; ?>" class="btn btn-transparent--inverse">
                <?php _e('New showcase idea', 'sixodp') ?>
              </a>
            </div>
            <div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-8 col-sm-8 col-xs-8">
              <div class="cards cards--3">
                <?php
                  // Start the loop.
                  while ( have_posts() ) : the_post();
                    $item = array(
                      'image_url' => get_post_thumbnail_url($post),
                      'title' => $post->post_title,
                      'show_rating' => false,
                      'date_updated' => $post->post_date,
                      'notes' => $post->post_content,
                      'url' => get_the_permalink(),
                    );
                    include(locate_template( 'partials/card-image.php' ));
                  endwhile;
                ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>