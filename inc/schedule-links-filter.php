<?php 
// echo '<pre>';
// print_r($terms);
// echo '</pre>';
$i=0; 
/*
################   First we Query the Day ##############

*/
// we'll store terms in this array so we don't repeat buttons of the same name.
$first = array();

$wp_query = new WP_Query();
$wp_query->query(array(
	'post_type'=> array('yoga','demo_clinic', 'competition','music'),
	'posts_per_page' => -1,
	'post_status' => array( 'publish', 'private' ),
	
));
if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post(); 
		// Get the ID and terms of each post
		$theID = get_the_ID();
		$terms = get_the_terms($theID, 'event_day');
		// foreach ($terms as $term) {
		// 	$day = $term->name;
		// 	// if we havn't added the day into the array, add it. Let's not repeat ourselves.
		// 	if( !in_array($day, $first) ) {
		// 		$first[] = $day;
		// 	}
		// }

		// The above works, but we're just going to do the days manually for now.
		$first = array('Thursday', 'Friday', 'Saturday', 'Sunday');

	endwhile; 
endif; 

// we Queried Everything for the Day's now let's create the buttons.

?>
<div id="filters" class=" filters">
	<h2 class="filter-title">Filter By:</h2>

	<!-- <div class="button-group group1 filters-button-group" data-filter-group="day"> -->
	<select class="option-set clearfix"  data-filter-group="day">
			<!-- <button class="filbutton button showall is-checked" data-filter="*">show all</button> -->
			<option value="*" data-filter-value="" class="selected">All Days</option>
		<?php 
		
			foreach ($first as $button) { 
				// sanitize it.
				$filterString = sanitize_title_with_dashes($button);
				?>
				<!-- <button class="filbutton button" data-filter=".<?php echo $filterString; ?>"><?php echo $button; ?></button> -->
				<option value="#filter-day-<?php echo $filterString; ?>" data-filter-value=".<?php echo $filterString; ?>"><?php echo $button; ?></option>
			<?php }
		?>
		</select>
	<!-- </div> -->

<?php 
$i=0;
/*
################   Second we Query the Activity Type   ##############

*/
// we'll store terms in this array so we don't repeat buttons of the same name.
$second = array();

// let's get music and yoga in here manually just because
$second[] = 'music';
$second[] = 'yoga';

$wp_query = new WP_Query();
$wp_query->query(array(
	'post_type'=> array('yoga','demo_clinic', 'competition','music'),
	'posts_per_page' => -1,
	'post_status' => array( 'publish', 'private' ),
	// No specific tax terms because we're pulling everything.
));
if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) :  $wp_query->the_post(); 
		// Get the ID and terms of each post
		$theID = get_the_ID();
		$terms = get_the_terms($theID, 'competition_type');

		

		if($terms){
			foreach ($terms as $term) {
				$day = $term->name;
				// if we havn't added the day into the array, add it. Let's not repeat ourselves.
				if( !in_array($day, $second) ) {
					$second[] = $day;
				}
			}
		}
	endwhile; 
endif; 

// we Queried Everything for the Day's now let's create the buttons.


?>

	<!-- <h2 class="filter-title">Filter By Activity Type:</h2> -->

	<!-- <div class="button-group group2 filters-button-group" data-filter-group="type"> -->
	<select class="option-set clearfix"  data-filter-group="type">
			<!-- <button class="filbutton button showall is-checked" data-filter="*">show all</button> -->
			<option value="*" data-filter-value="" class="selected">All</option>
		<?php 
		
			foreach ($second as $button) { 
				// sanitize it.
				$filterString = sanitize_title_with_dashes($button);
				// grab the first 4 characters so multi names can still link
				// $str = substr($filterString, 0, 4);
				?>
				<!-- <button class="filbutton button" data-filter=".<?php echo $filterString; ?>"><?php echo $button; ?></button> -->

<option value="#filter-type-<?php echo $filterString; ?>" data-filter-value=".<?php echo $filterString; ?>"><?php echo $button; ?></option>			<?php }
		?>
		</select>
	<!-- </div> -->
</div>
<?php 

/*


*/ ?>

<div id="outer-container" class="closed">
<div id="container">
	

<?php 
/*
################   Third we Query the All that will be filtered   ##############

*/ 
$i=0; 

$wp_query = new WP_Query();
$wp_query->query(array(
	'post_type'=> array('yoga','demo_clinic', 'competition','music'),
	'posts_per_page' => -1,
	// 'meta_key'			=> array('thursday_time_p', 'friday_time_p', 'saturday_time_p', 'sunday_time_p'),
	// 'orderby'			=> 'meta_value',
	// 'order'				=> 'ASC',
	'post_status' => array( 'publish', 'private' ),
	'tax_query' => array(
		array(
			'taxonomy' => 'event_day', // your custom taxonomy
			'field' => 'slug',
			'terms' => array( 'thursday', 'friday', 'saturday', 'sunday' ) // the terms (categories) you created
		)
	)
));
if ($wp_query->have_posts()) :  ?>

<?php while ($wp_query->have_posts()) :  $wp_query->the_post(); 

$queried_object = get_queried_object();
$theID = get_the_ID();
$i++; 
if( $i == 1 ) {
	
	// echo '<h2>'.$queried_object->name.'</h2>';
}
// terms
$terms = get_the_terms($theID, 'event_day');
foreach ( $terms as $term ) {
	$day = $term->slug;
	// echo $day;
}

$instructor = '';// need to fill this out.
$thurTime = get_field('thursday_time_p');
$thurEndTime = get_field('thursday_time_p_end');
$friTime = get_field('friday_time_p');
$friEndTime = get_field('friday_time_p_end');
$satTime = get_field('saturday_time_p');
$satEndTime = get_field('saturday_time_p_end');
$sunTime = get_field('sunday_time_p');
$sunEndTime = get_field('sunday_time_p_end');


// echo '<pre>';
// print_r($term);
// echo '</pre>';
if( $day == 'thursday' ) {
	$startTime = $thurTime;
	$EndTime = $thurEndTime;
	$regStart = get_field('thursday_start', 'option');
	$regEnd = get_field('thursday_end', 'option');
	$regLink = get_field('thursday_time_link', 'option');
}elseif( $day == 'friday' ) {
	$startTime = $friTime;
	$EndTime = $friEndTime;
	$regStart = get_field('friday_start', 'option');
	$regEnd = get_field('friday_end', 'option');
	$regLink = get_field('friday_start', 'option');
}elseif( $day == 'saturday' ) {
	$startTime = $satTime;
	$EndTime = $satEndTime;
	$regStart = get_field('saturday_start', 'option');
	$regEnd = get_field('saturday_end', 'option');
	$regLink = get_field('saturday_start', 'option');
}elseif( $day == 'sunday' ) {
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
	$type = 'Music';
} elseif( $postType == 'competition') {
	$taxSlug = 'competition-type';
	$tax = 'competition_type';
	$type = '';
} elseif( $postType == 'demo_clinic') {
	$taxSlug = 'demo-clinic-type';
	$tax = 'demo_clinic_type';
	$type = '';
} elseif( $postType == 'yoga') {
	$taxSlug = 'yoga-day';
	$tax = 'yoga_day';
	$type = 'Yoga';
}
if( $tax != '' ) {
	$terms = get_the_terms($theID, $tax );

	if($terms){$term = $terms[0]->slug;}
	// set the name
	if($type == '') {
		if($terms){$type = $terms[0]->name;}
	}
	$hash = sanitize_title_with_dashes(get_the_title());
	
	// echo '<pre>';
	// print_r($terms);
	// echo '</pre>';
}

// Location
$location = get_field('location');

// Instructor
$instructor = get_field('instructor');
$instructorInfo = get_field('instructor_information');
// $santiTitle = sanitize_title_with_dashes(get_the_title());

// Map (in options)
$mapLink = get_field('map_link', 'option');

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

// we got the terms up there, but we need to pull them for the filtering as well.
// and not based off post type... all of them.
$days = get_the_terms($theID, 'event_day');
$activity = get_the_terms($theID, 'competition_type');
$yogaDay = get_the_terms($theID, 'yoga_day');

// echo '<pre>';
// print_r($days);
// echo '</pre>';

		
?>

	<div class="item
		<?php 
		// if($days){
		// 	foreach ($terms as $term) {
		// 		$day = $term->name;
		// 		// if we havn't added the day into the array, add it. Let's not repeat ourselves.
		// 		if( !in_array($day, $second) ) {
		// 			$second[] = $day;
		// 		}
		// 	}
		// }
		// set the classes for filtering
		
		foreach( $days as $day ) {
			$day = $day->slug;
			$str = strtolower($day);
			echo $day.' ';
		}
		
		if($activity) {
			foreach( $activity as $act ) {
				$act = $act->slug;
				// $str = strtolower($act);
				// grab the first 4 characters so multi names can still link
				// $str = substr($str, 0, 4);
				echo $act.' ';
			}
		} 

		// Music is a post type, but doesn't have a taxonomy, so we gotta add it.
		if( get_post_type() == 'music' ) {
			echo ' music ';
		}

		// Gotta pull the Yoga Too!
		// But! we will see if there is a "Yoga Day"
		// But we won't pull it as is, because is redundant as a term for the first filter
		// so, since we added the yoga term to the array manuaaly at the beginning, 
		// we simply just add the name, "yoga"
		if($yogaDay) {
			echo ' yoga ';
		} 
		?>


	">
		<div class="card">
			<div class="info">
				<div class="title">
					<h2><?php the_title(); ?></h2>
				</div>
				<?php if($startTime) { ?>
					<div class="info-item">
						TIME: <?php 
							echo $startTime; 
							if( $EndTime != '') {
								echo ' - '.$EndTime;
							} ?>
					</div>
				<?php } ?>
				<?php if($location) { ?>
					<div class="info-item">
						LOCATION: <?php echo $location[0]; ?> <a href="<?php echo $mapLink; ?>">[MAP]</a>
					</div>
				<?php } ?>
				<?php if($type) { ?>
					<div class="info-item">
						<?php echo $type; ?>
					</div>
				<?php } ?>
				<?php if($instructor) { ?>
					<div class="info-item">
						INSTRUCTOR: <?php echo $instructor; ?>
					</div>
				<?php } ?>
				<div class="info-item">
					<a href="<?php echo $url; ?>">
						Information & Description
					</a>
				</div>
			</div>
			<div class="offset"></div>
		</div>
	</div>

<?php endwhile; endif; ?>
</div>
</div>