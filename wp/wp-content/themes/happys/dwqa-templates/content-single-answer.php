<?php
/**
 * The template for displaying single answers
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.4.3
 */
?>
<div class="article_question <?php echo dwqa_post_class() ?>">
	<div class="article_question--inner">
		<div class="dwqa-answer-meta">
			<?php $user_id = get_post_field( 'post_author', get_the_ID() ) ? get_post_field( 'post_author', get_the_ID() ) : 0 ?>
			<?php printf( __( '<span><a href="%s">%s%s</a> %s answered %s ago</span>', 'dwqa' ), dwqa_get_author_link( $user_id ), get_avatar( $user_id, 48 ), get_the_author(), dwqa_print_user_badge( $user_id ), human_time_diff( get_post_time( 'U', true ) ) ) ?>
			<?php if ( 'private' == get_post_status() ) : ?>
				<span><?php _e( '&nbsp;&bull;&nbsp;', 'dwqa' ); ?></span>
				<span><?php _e( 'Private', 'dwqa' ) ?></span>
			<?php endif; ?>
		</div>
	</div>
	<div class="dwqa-answer-content"><?php the_content(); ?></div>
</div>
