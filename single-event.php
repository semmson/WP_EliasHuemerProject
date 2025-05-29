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
						<span class="date">April 25, 2017</span>
						<h1><?= the_title()?></h1>
						<?php 
						$post_id = get_the_ID();
						$post   = get_post( $post_id );
						$location = get_post_meta( $post->ID, 'event_location' );
						$date = get_post_meta( $post->ID, 'event_date' );
						$ticket_link = get_post_meta( $post->ID, 'ticket_link' );
						$information = get_post_meta( $post->ID, 'event_information' );
						echo "<h4>".$location[0]."</h4>";
						echo "<h4>".$date[0]."</h4>";
						echo "<h4>".$information[0]."</h4>";
						echo "<h4>".$ticket_link[0]."</h4>";

						
						?>

						<h4>this is single event</h4>
					</header>
					<div class="image main"><img src="<?= get_the_post_thumbnail_url() ?>" alt="" /></div>
					<p><?= the_content()?></p>
				</section>

		</div>

<?php 
get_footer();
