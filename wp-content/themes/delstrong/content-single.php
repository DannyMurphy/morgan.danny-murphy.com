<?php
/**
 * @package delstrong
 */
?>
<?php
$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
if ( ! is_array($attachments) ) continue;
$count = count($attachments);
$first_attachment = array_shift($attachments);
?>
<?php $image_attributes = wp_get_attachment_image_src($first_attachment->ID, 'full'); ?>


<div class="entry__image" style="background: url(<?php echo $image_attributes[0]; ?>) 50% 50% no-repeat; background-size: cover;"> </div>
<div class="page">
	<div class="header">
		<img src="<?php echo get_bloginfo('template_directory');?>/img/delstrong-logo.svg" alt="DelStong Logo" class="header__image">
	</div>
	

	<h1 class="entry__title"><?php the_title(); ?></h1>
		

	

	<div class="footer">
		<div class="entry__description"><?php the_content(); ?></div>

		<div class="footer__group">
			<div class="footer__details">
				<p>studio &ndash; 88a main st, alstonville<br/>
				phone &ndash; 02 6628 1749<br/>
				mobile &ndash; 0401 447 717<br/>
				web &ndash; delstrong.com<br/>
				email &ndash; art@delstrong.com</p>
			</div>
			<div class="footer__books">
				<img src="<?php echo get_bloginfo('template_directory');?>/img/books-image.png" alt="Delstrong Books" class="footer__image">
			</div>
		</div>		
	</div>
</div>
