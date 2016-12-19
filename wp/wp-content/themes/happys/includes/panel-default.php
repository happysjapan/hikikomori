<?php
$queried_object = get_queried_object();
$post_type = get_post_type();
$post_type_tax = $post_type.'_tag';
?>

<article id="post-<?php the_ID(); ?>" class="row">
  <div class="columns">
    <section class="panel">
      <h3 class="panel--title panel--header"><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="panel--title--link"><?php the_title(); ?></a></h3>

      <div class="panel--content row">
        <div class="small-12 medium-6 columns">
          <?php $thumbnail = get_field('default_thumbnail'); ?>
          <?php if( !$thumbnail ){
            $thumbnail_url = get_template_directory_uri().'/images/ad_thumbnail.png';
          } else {
            $thumbnail_url = $thumbnail['sizes']['thumbnail'];
          } ?>

          <img class="panel--thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
        </div>

        <div class="small-12 medium-6 columns">
          <div class="panel--tag">
            <p><?php echo get_the_term_list($post->ID, $post_type_tax); ?></p>
          </div>
           <div class="panel--description">
             <?php echo get_field('default_description'); ?>
           </div>
        </div>
      </div>
      <footer class="row">
        <div class="columns">
          <div class="button__panel--holder">
            <a href="<?php the_permalink(); ?>"  title="詳しく見る" class="button button__panel"><i class="fa fa-caret-right" aria-hidden="true"></i>詳細</a>
          </div>
        </div>
      </footer>
    </section>
  </div>
</article>
