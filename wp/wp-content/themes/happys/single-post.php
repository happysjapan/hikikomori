<?php get_header(); ?>

<div class="wrapper">
  <div class="row">
    <div class="columns breadcrumbs--top">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>

  <div class="row">
    <main role="main" class="section_main columns small-12 medium-9">
      <div class="detail detail--content">
        <div class="social--buttons">
      		<?php get_template_part( 'includes/social-buttons' ); ?>
      	</div>

        <header class="detail--clinic_header">
          <h1 class="detail--single_title"><?php the_title(); ?>ひきこもり・家庭内暴力相談窓口</h1>

          <div class="row">
            <div class="columns small-12 medium-4">
              <?php $topimage = get_field('default_top_image'); ?>
              <?php if( !$topimage ){
                $topimage_url = get_template_directory_uri().'/images/ad_thumbnail.png';
              } else {
                $topimage_url = $topimage['sizes']['large'];
              } ?>
              <img class="detail--img" src="<?php echo $topimage_url; ?>" alt="<?php the_title(); ?>" />
              <!-- tag -->
              <div class="panel--tag detail--is_mobile">
                <p>
                  <?php echo get_the_tag_list(); ?>
                </p>
              </div>
              <!-- end of tag -->
            </div>

            <div class="columns small-12 medium-8">
              <table class="table table-bordered">
                <tbody class="clinic_table">
                  <tr>
                    <th>営業時間</th>
                    <td>月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日</td>
                    <td>祝</td>
                 </tr>
                  <tr>
                    <th>お問い合わせ窓口<br /><?php echo get_field('clinic_contact_time'); ?></th>
                    <td><?php the_field('contact_monday'); ?></td>
                    <td><?php the_field('contact_tuesday'); ?></td>
                    <td><?php the_field('contact_wednesday'); ?></td>
                    <td><?php the_field('contact_thursday'); ?></td>
                    <td><?php the_field('contact_friday'); ?></td>
                    <td><?php the_field('contact_saturday'); ?></td>
                    <td><?php the_field('contact_sunday'); ?></td>
                    <td><?php the_field('contact_public_holiday'); ?></td>
                  </tr>
                  <tr>
                    <th>通所<br /><?php echo get_field('clinic_day_care'); ?></th>
                    <td><?php the_field('day_care_monday'); ?></td>
                    <td><?php the_field('day_care_tuesday'); ?></td>
                    <td><?php the_field('day_care_wednesday'); ?></td>
                    <td><?php the_field('day_care_thursday'); ?></td>
                    <td><?php the_field('day_care_friday'); ?></td>
                    <td><?php the_field('day_care_saturday'); ?></td>
                    <td><?php the_field('day_care_sunday'); ?></td>
                    <td><?php the_field('day_care_public_holiday'); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </header>


        <!-- Button -->
        <div class="row">
          <div class="columns small-6 button__highlight--holder">
            <a href="<?php the_permalink(); ?>"  title="電話でご相談" class="button button__highlight phone expanded">
              <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_phone"></span></i><?php echo get_field('clinic_tel'); ?></span>
            </a>
          </div>
          <div class="columns small-6 button__highlight--holder">
            <a href="<?php the_permalink(); ?>"  title="フォームで無料相談" class="button button__highlight mail expanded">
              <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_mail"></span></i>フォームで無料相談</span>
            </a>
          </div>
        </div>
        <!-- end of button -->

        <section class="detail--clinic_description">
          <?php echo get_field('clinic_description'); ?>
        </section>

        <div class="row">
         <div class="columns small-12">
           <table class="table table-bordered">
             <tbody>
               <tr>
               <th colspan="2">窓口詳細情報</th>
              </tr>
               <tr>
                 <th>ご相談可能時間</th>
                 <td>
                   <?php echo get_field("clinic_time"); ?>
                 </td>
               </tr>
               <tr>
                 <th>定休日</th>
                 <td><?php the_field("clinic_holiday"); ?></td>
               </tr>
               <tr>
                 <th>お問合わせ番号</th>
                 <td><?php the_field("clinic_tel"); ?></td>
               </tr>
               <tr>
                 <th>窓口からコメント</th>
                 <td><?php the_field("clinic_comment"); ?></td>
               </tr>
             </tbody>
           </table>
         </div>
       </div>
       <!-- Button -->
       <div class="row">
         <div class="columns small-6 button__highlight--holder">
           <a href="<?php the_permalink(); ?>"  title="電話でご相談" class="button button__highlight phone expanded">
             <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_phone"></span></i><?php echo get_field('clinic_tel'); ?></span>
           </a>
         </div>
         <div class="columns small-6 button__highlight--holder">
           <a href="<?php the_permalink(); ?>"  title="フォームで無料相談" class="button button__highlight mail expanded">
             <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_mail"></span></i>フォームで無料相談</span>
           </a>
         </div>
       </div>
       <!-- end of button -->


        <section>
         <h2 class="detail--clinic__title">相談窓口の対象となる方</h2>
         <div class="detail--clinic__text">
           <?php echo get_field('clinic_target'); ?>
         </div>
         <!-- Button -->
         <div class="row">
           <div class="columns small-6 button__highlight--holder">
             <a href="<?php the_permalink(); ?>"  title="電話でご相談" class="button button__highlight phone expanded">
               <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_phone"></span></i><?php echo get_field('clinic_tel'); ?></span>
             </a>
           </div>
           <div class="columns small-6 button__highlight--holder">
             <a href="<?php the_permalink(); ?>"  title="フォームで無料相談" class="button button__highlight mail expanded">
               <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_mail"></span></i>フォームで無料相談</span>
             </a>
           </div>
         </div>
         <!-- end of button -->
        </section>


        <section>
          <h2 class="detail--clinic__title">窓口利用の流れ</h2>
          <div class="detail--clinic__text">
            <?php echo get_field('clinic_target'); ?>
          </div>
          <!-- Button -->
          <div class="row">
            <div class="columns small-6 button__highlight--holder">
              <a href="<?php the_permalink(); ?>"  title="電話でご相談" class="button button__highlight phone expanded">
                <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_phone"></span></i><?php echo get_field('clinic_tel'); ?></span>
              </a>
            </div>
            <div class="columns small-6 button__highlight--holder">
              <a href="<?php the_permalink(); ?>"  title="フォームで無料相談" class="button button__highlight mail expanded">
                <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_mail"></span></i>フォームで無料相談</span>
              </a>
            </div>
          </div>
          <!-- end of button -->
        </section>

        <section>
          <h2 class="detail--clinic__title"><?php the_title(); ?>の支援施設・センター・病院</h2>
          <div class="detail--clinic__text">
          <?php echo get_field('clinic_target'); ?>
          </div>
          <!-- Button -->
          <div class="row">
           <div class="columns small-6 button__highlight--holder">
             <a href="<?php the_permalink(); ?>"  title="電話でご相談" class="button button__highlight phone expanded">
               <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_phone"></span></i><?php echo get_field('clinic_tel'); ?></span>
             </a>
           </div>
           <div class="columns small-6 button__highlight--holder">
             <a href="<?php the_permalink(); ?>"  title="フォームで無料相談" class="button button__highlight mail expanded">
               <span class="button--inner"><i class="button--sprite" aria-hidden="true"><span class="sprite icon_small_mail"></span></i>フォームで無料相談</span>
             </a>
           </div>
         </div>
         <!-- end of button -->
        </section>
      </div>
    </main>

    <aside class="section_aside small-8 small-offset-2 medium-3 medium-offset-0 columns">
      <?php dynamic_sidebar( 'aside-widget-area' ); ?>
    </aside>
  </div>

  <div class="row breadcrumbs--bottom">
    <div class="columns">
      <?php custom_breadcrumbs(); ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
