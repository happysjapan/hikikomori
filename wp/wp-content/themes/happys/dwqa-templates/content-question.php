<?php
/**
 * The template for displaying question content
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.4.3
 */

?>
<article class="article_question <?php echo dwqa_post_class(); ?>">
	<div class="article_question--inner">

		<div class="dwqa-question-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		<div class="dwqa-question-meta">
			<?php dwqa_question_print_status() ?>
			<?php
				global $post;
				$user_id = get_post_field( 'post_author', get_the_ID() ) ? get_post_field( 'post_author', get_the_ID() ) : false;
				$time = human_time_diff( get_post_time( 'U', true ) );
				$text = __( 'asked', 'dwqa' );
				$latest_answer = dwqa_get_latest_answer();
				if ( $latest_answer ) {
					$time = human_time_diff( strtotime( $latest_answer->post_date_gmt ) );
					$text = __( 'answered', 'dwqa' );
				}
			?>
			<?php printf( __( '<span><a href="%s">%s%s</a> %s %s ago</span>', 'dwqa' ), get_the_permalink(), get_avatar( $user_id, 48 ), get_the_author(), $text, $time ) ?>
		</div>
		<div class="dwqa-question-stats">
			<span class="dwqa-views-count">
				<?php $views_count = dwqa_question_views_count() ?>
				<?php printf( __( '<strong>%1$s</strong> views', 'dwqa' ), $views_count ); ?>
			</span>
			<span class="dwqa-answers-count">
				<?php $answers_count = dwqa_question_answers_count(); ?>
				<?php printf( __( '<strong>%1$s</strong> answers', 'dwqa' ), $answers_count ); ?>
			</span>
		</div>
	</div>

	<div class="dwqa-question-content"><?php the_content(); ?></div>

	<div class="button__answer--holder">
		<button class="button button__toggle"type="button" name="Expand">+</button>
		<a class="button button__answer" href="<?php the_permalink(); ?>">
			<i class="button--sprite" aria-hidden="true"><span class="sprite icon_answer"></span></i>回答する
		</a>
	</div>
</article>
