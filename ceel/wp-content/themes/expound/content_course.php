<?php
/**
 * @package Expound
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<h2><!-- <a href="<?php the_permalink(); ?>" rel="bookmark">--><?php the_title(); ?><!--</a>--></h2> 
		<span class="price"><?php echo get_field('price'); ?></span>
	</header><!-- .entry-header -->


	<div class="details">
		<?php
		$courses = get_field('courses');
		$address = get_field('address');
		$contact_email = get_field('contact_email');
		$contact_phone = get_field('contact_phone');
		$contact_website = get_field('contact_website');
		
		if($courses)
		{
			echo '<p class="level">Level: ' . $courses . '</p>';
		}?>

		<ul class="additional">
			
			<?php if($address) { ?>
			
				<li class="title">Address:</li>
				<li class="desc"><?php echo $address; ?></li>
			
			<?php }

			if($contact_email) { ?>
				
				<li class="title">Email:</li>
				<li class="desc"><?php echo $contact_email; ?></li>

			<?php }

			if($contact_phone) { ?>

				<li class="title">Phone:</li>
				<li class="desc"><?php echo $contact_phone; ?></li>
			
			<?php }

			if($contact_website) { ?>

				<li class="title">Website:</li>
				<li class="desc"><a href="<?php echo get_field('contact_website'); ?>"><?php echo get_field('contact_website'); ?></a></li>

			<?php } ?>
		</ul>
	
	
	</div>
	

	<p class="entry-summary">
		<?php the_excerpt(); ?>
	</p><!-- .entry-summary -->

</article><!-- #post-## -->
