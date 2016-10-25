<article id="post-<?php the_ID(); ?>" class="row">
  <div class="columns">
    <div class="panel">

        <div class="row panel--header">
          <div class="small-3 columns">
            <?php $thumbnail = get_field('default_thumbnail'); ?>
            <?php if( !$thumbnail ){
              $thumbnail_url = get_template_directory_uri().'/images/ad_thumbnail.png';
            } else {
              $thumbnail_url = $thumbnail['sizes']['thumbnail'];
            } ?>

            <img class="panel--voice__thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
          </div>
          <h3 class="panel--title small-9 columns"><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="panel--title--link"><?php the_title(); ?></a></h3>
        </div>

        <div class="panel--content row">
          <div class="columns">
            <div class="panel--tag">
              <p class="panel--voice__tag"><?php echo get_the_term_list($post->ID,'voice_tag'); ?></p>
            </div>
           <div class="panel--voice__description">
             <?php echo get_field('default_description'); ?>
           </div>
         </div>
        </div>
        <div class="row">
          <div class="columns">
            <div class="button__panel--holder">
              <a href="<?php the_permalink(); ?>"  title="詳しく見る" class="button button__panel"><i class="fa fa-caret-right" aria-hidden="true"></i>詳細</a>
            </div>
          </div>
        </div>
  </div>
</article>
