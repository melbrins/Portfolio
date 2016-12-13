<?php 
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php 

// Setup an array of venue details for use later in the template
$venue_details = array();

/*
if ($venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
	$venue_details[] = $venue_name;	
}
*/

$venue_name = tribe_get_meta('tribe_event_venue_name');

if ($venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
	$venue_details[] = $venue_address;	
}
// Venue microformats
$has_venue = ( $venue_details ) ? ' vcard': '';
$has_venue_address = ( $venue_address ) ? ' location': '';
?>

<!-- Event Cost -->
<?php if ( tribe_get_cost() ) : ?> 
	<div class="tribe-events-event-cost">
		<span><?php echo tribe_get_cost( null, true ); ?></span>
	</div>
<?php endif; ?>

<!-- Event Title -->
<?php do_action( 'tribe_events_before_the_event_title' ) ?>
<div class="head">
<ul>
<li class="flag <?php
	$terms = get_the_terms( $post->ID , 'tribe_events_cat' );
	foreach ($terms as $term ) {
		echo $term->slug;
	}
?>"></li>

<li class="title">
<h2 class="tribe-events-list-event-title summary">
	<!-- <a class="url" href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>" rel="bookmark"> -->
		<?php the_title() ?>
	<!-- </a> -->
</h2>
<h3><?php echo $venue_name ?></h3>
</li>

<li class="time">
	<!-- Schedule & Recurrence Details -->
	<?php echo tribe_events_event_schedule_details() ?>
</li>
</ul>

<div class="reveal"><span></span>Open</div>
</div>
<?php do_action( 'tribe_events_after_the_event_title' ) ?>

<!-- Event Meta -->
<?php do_action( 'tribe_events_before_the_meta' ) ?>
<div class="body">
<ul>
<li class="icon">icon</li>
<li class="desc">
<h4 class="clearfix">
<?php if ( $venue_details ) : ?>
<?php echo implode( ', ', $venue_details) ; ?>
<?php endif; ?>
</h4>
<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ) ?>
	<?php the_excerpt() ?>
	<a href="<?php echo tribe_get_event_link() ?>" class="tribe-events-read-more" rel="bookmark"><?php _e( 'Find out more', 'tribe-events-calendar' ) ?> &raquo;</a>
</li>
</ul>
<?php do_action( 'tribe_events_after_the_meta' ) ?>

<!-- Event Image -->
<?php echo tribe_event_featured_image( null, 'medium' ) ?>


</div>
<?php do_action( 'tribe_events_after_the_content' ) ?>