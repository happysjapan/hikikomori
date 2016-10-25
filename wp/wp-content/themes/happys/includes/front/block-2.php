<?php
  $queried_object = get_queried_object();
?>
<div class="front-widget">
  <h3 class="aside--title">
    <i class="aside--sprite" aria-hidden="true"><span class="sprite icon_menu_4"></span></i>
    引きこもり/家庭内暴力でお困りのご家族へ
  </h3>

  <div class="sideWidget front_block_wrapper">
      <div class="inner">

        <ul class="aside--list row">
          <?php while ( have_rows('front_pagelink', $queried_object->ID) ) : the_row();
            $front_thumbnail = get_sub_field('front_thumbnail');
            $page_object = get_sub_field('front_for_family');
          ?>
            <li class="aside--item columns small-12">
              <div class="aside--link">
                <div class="row">
                  <div class="small-12 medium-3 columns">
                    <?php if( !$front_thumbnail ){
                      $thumbnail_url = get_template_directory_uri().'/images/ad_thumbnail.png';
                    } else {
                      $thumbnail_url = $front_thumbnail['sizes']['thumbnail'];
                    } ?>

                    <img class="panel--thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
                  </div>
                  <div class="small-12 medium-9 columns">
                    <h4 class="aside--item--title"><?php echo $page_object->post_title; ?></h4>
                    <div class="aside--item--content">
                      <?php echo get_field('page_summary', $page_object->ID); ?>
                    </div>
                    <div class="button__in_widget--holder">
                      <a href="<?php echo get_the_permalink($page_object->ID); ?>"><button class="button button__in_widget" type="button" name="button">▶ 詳細</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>

        </div>
      </div>


  </div>
