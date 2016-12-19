<article id="post-<?php the_ID(); ?>" class="row">
  <div class="columns">
    <div class="panel">

      <header class="panel--header">
        <h2 class="panel--title"><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>" class="panel--title--link"><?php the_title(); ?></a></h2>
      </header>

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
            <p>
              <?php echo get_the_tag_list(); ?>
            </p>
          </div>
           <div class="panel--description">
             <?php echo get_field('default_description'); ?>
           </div>
        </div>
      </div>

      <div class="row">
        <div class="columns small-6 button__highlight--holder">
          <a href="<?php the_permalink(); ?>"  title="電話で無料相談" class="button button__highlight phone expanded">
            <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_phone"></span></i>電話で無料相談</span>
          </a>
        </div>
        <div class="columns small-6 button__highlight--holder">
          <a href="<?php echo home_url(); ?>/contact/?consultation-name=<?php the_title(); ?>"  title="フォームで無料相談" class="button button__highlight mail expanded">
            <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_mail"></span></i>フォームで無料相談</span>
          </a>
        </div>
      </div>

      <footer class="row collapse">
        <div class="columns small-12 button__detail--holder">
          <a href="<?php the_permalink(); ?>"  title="詳しく見る" class="button button__detail expanded">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>詳細
          </a>
        </div>
      </footer>

    </div>
  </div>
</article>
