<?php 

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
	$taxSlug = 'yoga';
	$tax = 'event_day';
}
if( $tax != '' ) {
	$terms = get_the_terms($theID, $tax );

	$term = $terms[0]->slug;

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