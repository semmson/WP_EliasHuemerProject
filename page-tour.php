<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>

<!-- Header -->

	<!-- Logo -->
		<?php get_template_part("template-parts/logo") ?>

	<!-- Nav -->
		<?php get_template_part("template-parts/navbar") ?>

	<!-- Main -->
		<div id="main">

			<!-- Post -->
				<section class="post">
					<header class="major">
						<!-- <span class="date">April 25, 2017</span> -->
						<h1><?= the_title()?></h1>
						
					</header>

					<?php 
						$post_id = get_the_ID();
						$post   = get_post( $post_id );
						/* $location = get_post_meta( $post->ID, 'event_location' ); */
						
					?>

					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>Date</th>
									<th>Location</th>
									<!-- <th>Details</th> -->
								</tr>
							</thead>
							<tbody>
								<?php
								$args = array(
									'meta_query' => array(array(
										'key' => 'event_date',
										'value' => date('Ymd', strtotime("now")),
										'compare' => '>',
										'type' => 'DATE'
									)),
									'post_type' => 'event', 
									'meta_key' => 'event_date', 
									'orderby' => 'meta_value', 
									'order' => 'ASC'
								);
								$query = new WP_Query($args);
								while($query->have_posts()){
									$query->the_post();
									
									if($post) {
										$location = get_post_meta( $post->ID, 'event_location' );
										$date = get_post_meta( $post->ID, 'event_date' );
										$ticket_link = get_post_meta( $post->ID, 'ticket_link' );
										$information = get_post_meta( $post->ID, 'event_information' );
										$country = get_post_meta($post->ID,'event_country');
										echo "<tr>";
										echo "<td>".date('F j, Y', strtotime($date[0]))."</td>"; // converts date from Ymd to F j, Y format
										echo '<td><span class="fi fi-'.$country[0].'"></span>'.$location[0].'</td>';
										echo '<td>'.$information[0].'</td>';
										echo '<td><a href="'.$ticket_link[0].'" class="button primary small">Learn More</a></td>';
										echo "</tr>";
									}
								}
							?>

							</tbody>
						</table>
					</div>
					<div class="image fit"><img src="<?= get_template_directory_uri() ?>/images/elsn_blurry_thin.jpg" alt=""/></div>

					<h4>Past Events</h4>
					<div class="table-wrapper">
						<table>
							
							<tbody>
							<?php
								$args = array(
									'meta_query' => array(array(
										'key' => 'event_date',
										'value' => date('Ymd', strtotime("now")),
										'compare' => '<',
										'type' => 'DATE'
									)),
									'post_type' => 'event', 
									'meta_key' => 'event_date', 
									'orderby' => 'meta_value', 
									'order' => 'ASC'
								);
								$query = new WP_Query($args);
								while($query->have_posts()){
									$query->the_post();
									
									if($post) {
										$location = get_post_meta( $post->ID, 'event_location' );
										$date = get_post_meta( $post->ID, 'event_date' );
										$ticket_link = get_post_meta( $post->ID, 'ticket_link' );
										$information = get_post_meta( $post->ID, 'event_information' );
										$country = get_post_meta($post->ID,'event_country');
										echo "<tr>";
										echo "<td>".date('F j, Y', strtotime($date[0]))."</td>"; // converts date from Ymd to F j, Y format
										echo '<td><span class="fi fi-'.$country[0].'"></span>'.$location[0].'</td>';
										echo '<td>'.$information[0]."</td>";
										echo '<td>'.'<a href="#" class="button primary small disabled">Past Event</a>'.'</td>';
										echo "</tr>";
									}
								}
							?>
							</tbody>
							<!-- <tfoot>
								<tr>
									<td colspan="2"></td>
									<td>100.00</td>
								</tr>
							</tfoot> -->
						</table>
					</div>				
					
					<!-- <div class="image main"><img src="<?= get_the_post_thumbnail_url() ?>" alt="" /></div>
					<p><?= the_content()?></p> -->
				</section>
		</div>

<?php 
get_footer();
