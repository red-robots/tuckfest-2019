<?php 
$queried_object = get_queried_object();
$i++; 

if( $i == 1 ) {
?>

	<div class="image">
		<?php get_template_part('inc/banner'); ?>
		<div class="icon">
			<img src="<?php echo get_bloginfo('template_url'); ?>/images/W_button.png">
		</div>
	</div>
	<h2><?php echo $queried_object->name; ?></h2>

<?php }



$thurTime = get_field('thursday_time_p');
$thurEndTime = get_field('thursday_time_p_end');
$friTime = get_field('friday_time_p');
$friEndTime = get_field('friday_time_p_end');
$satTime = get_field('saturday_time_p');
$satEndTime = get_field('saturday_time_p_end');
$sunTime = get_field('sunday_time_p');
$sunEndTime = get_field('sunday_time_p_end');


// echo '<pre>';
// print_r($queried_object);
// echo '</pre>';
if( $queried_object->slug == 'thursday' ) {
	$startTime = $thurTime;
	$EndTime = $thurEndTime;
	$regStart = get_field('thursday_start', 'option');
	$regEnd = get_field('thursday_end', 'option');
	$regLink = get_field('thursday_time_link', 'option');
}elseif( $queried_object->slug == 'friday' ) {
	$startTime = $friTime;
	$EndTime = $friEndTime;
	$regStart = get_field('friday_start', 'option');
	$regEnd = get_field('friday_end', 'option');
	$regLink = get_field('friday_start', 'option');
}elseif( $queried_object->slug == 'saturday' ) {
	$startTime = $satTime;
	$EndTime = $satEndTime;
	$regStart = get_field('saturday_start', 'option');
	$regEnd = get_field('saturday_end', 'option');
	$regLink = get_field('saturday_start', 'option');
}elseif( $queried_object->slug == 'sunday' ) {
	$startTime = $sunTime;
	$EndTime = $sunEndTime;
	$regStart = get_field('sunday_start', 'option');
	$regEnd = get_field('sunday_end', 'option');
	$regLink = get_field('sunday_start', 'option');
}

$theID = get_the_ID();
$postType = get_post_type();

if( $postType == 'music') {
	$taxSlug = 'event-day';
	$tax = 'event_day';
} elseif( $postType == 'competition') {
	$taxSlug = 'competition-type';
	$tax = 'competition_type';
} elseif( $postType == 'demo_clinic') {
	$taxSlug = 'demo-clinic-type';
	$tax = 'demo_clinic_type';
} elseif( $postType == 'yoga') {
	$taxSlug = 'yoga-day';
	$tax = 'yoga_day';
}
if( $tax != '' ) {
	$terms = get_the_terms($theID, $tax );

	if($terms){$term = $terms[0]->slug;}

	$hash = sanitize_title_with_dashes(get_the_title());
	
	// echo '<pre>';
	// print_r($terms);
	// echo '</pre>';
}



if( $postType == 'music' ) {
	if( $term == 'thursday') {
		$page = 'thursday-line-up';
	} elseif( $term == 'friday') {
		$page = 'friday-line-up';
	} elseif( $term == 'saturday') {
		$page = 'saturday-line-up';
	} elseif( $term == 'sunday') {
		$page = 'sunday-line-up';
	}
	$url = get_bloginfo('url').'/tuckfest-music/'.$page.'/#'.$hash;
} else {
	
	$url = get_bloginfo('url').'/'.$taxSlug.'/'.$term.'/#'.$hash;
} 


if( $i ==1 ) {

?>
	<li>
		<a href="<?php echo $regLink; ?>">Tuck Fest Registration & Packet Pick-up</a>
		<div class="time">
			<?php echo $regStart.' - '.$regEnd;  ?>
		</div>
	</li>
<?php } ?>
<li>

	<a href="<?php echo $url; ?>">
		<?php the_title(); ?>
	</a>
	<div class="time">
		<?php 
		echo $startTime; 
		if( $EndTime != '') {
			echo ' - '.$EndTime;
			}?>
	</div>
</li>