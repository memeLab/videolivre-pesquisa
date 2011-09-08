<?php get_header(); ?>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div id="single">
			<div id="cmm">
				<?php $cmmargs = array (
					'title_reply'          => __( 'Deixar um comentário' ),
					'title_reply_to'       => __( 'Responder  %s' )
				); ?>
				<?php comment_form($cmmargs, 70); ?>
				<?php wp_list_comments( array( 'callback' => 'twentyten_comment' ) ); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
