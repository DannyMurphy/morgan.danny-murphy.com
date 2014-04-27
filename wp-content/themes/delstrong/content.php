<?php
/**
 * @package delstrong
 */
?>


<article id="post-<?php the_ID(); ?>" class="list">
	
	<h2 class="list__title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
	<div class="list__description"><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'delstrong' ) ); ?></div>
	
	<?php edit_post_link( __( 'Edit', 'delstrong' ), '<span class="list__edit-link">', '</span>' ); ?>
	
</article>
