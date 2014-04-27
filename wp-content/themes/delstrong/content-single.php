<?php
/**
 * @package delstrong
 */
?>

<article id="post-<?php the_ID(); ?>" class="entry">
	<h1 class="entry__title"><?php the_title(); ?></h1>
	<div class="entry__description"><?php the_content(); ?></div>

</article><!-- #post-## -->
