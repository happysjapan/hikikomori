<?php get_header();
$post_type = 'voice';
$post_type_tax = $post_type.'_tag';
$queried_object = get_queried_object();
$current_id = $queried_object->ID;
$categories = wp_get_post_terms( $current_id, $post_type_tax );
$tag_list = get_the_term_list($post->ID,$post_type_tax);

$voice_link = get_post_type_archive_link($post_type);

foreach ($categories as $cat) {
    $tax_map[$cat->slug] = $cat->term_id;
}
?>

<div class="wrapper">
  <div class="row">
    <div class="columns breadcrumbs--top">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>

  <div class="row">

    <main role="main" class="section_main columns small-12 medium-9">
      <div class="detail detail--content">
        <header class="detail--voice-header">
          <div class="row">
            <div class="columns small-3">
              <div class="detail--voice-image">
                <?php $topimage = get_field('default_thumbnail'); ?>
                <?php if( !$topimage ){
                  $topimage_url = get_template_directory_uri().'/images/ad_thumbnail.png';
                } else {
                  $topimage_url = $topimage['sizes']['thumbnail'];
                } ?>

                <img class="detail--img" src="<?php echo $topimage_url; ?>" alt="<?php the_title(); ?>" />
              </div>
            </div>
            <section class="columns small-9">
              <h1 class=detail--single_title><?php the_title(); ?></h1>
            </section>
          </div>

          <div class="detail--tag">
            <?php echo get_the_term_list($post->ID,'voice_tag'); ?>
          </div>
        </header>

        <?php
        if (have_rows("default_details")) {
        while ( have_rows("default_details") ) : the_row(); ?>
          <div class="columns">
            <article>
               <h4 class="sub_title"><?php the_sub_field('default_details_sub_title'); ?></h4>
               <div class="detail--text"><?php the_sub_field('default_details_sub_contents'); ?></div>
             </article>
          </div>
        <?php endwhile; } ?>
      </div>

      <!-- Related article -->
      <div class="row">
        <div class="columns">
          <section class="detail related">
            <h2 class="related--title">
              <i class="related--sprite" aria-hidden="true"><span class="sprite icon_link"></span></i>
              関連記事新着
            </h2>
            <?php
            $custom_args = array(
              'post_type' => $post_type,
              'post_status' => 'publish',
              'has_password' => false,
              'posts_per_page' => 5,
              'exclude' => $current_id,
              'tax_query' => array(
                array(
                  'taxonomy' => $post_type_tax,
                  'field' => term_id,
                  'terms' => $tax_map,
                )
              )
            );
            $related_posts = get_posts( $custom_args ); ?>
            <ul class="related--list row">
              <?php foreach ($related_posts as $related) { ?>
                <li class="related--item small-12 columns">
                  <a class="related--link" href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo get_the_permalink($related->ID); ?>">
                    <h3 class="related--item--title"><?php echo $related->post_title; ?></h3>
                  </a>
                </li>
              <?php } ?>
            </ul>

            <div class="button__new-article--holder">
              <a class="aside--more button button__more" href="<?php echo $voice_link; ?>" title="もっと見る"><i class="fa fa-chevron-right" aria-hidden="true"></i>もっと見る</a>
            </div>
          </section>
        </div>
      </div>
      <!-- end of Related article -->
    </main>

    <aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
      <?php dynamic_sidebar( 'aside-widget-area' ); ?>
    </aside>

  </div>
</div>

<?php get_footer(); ?>
