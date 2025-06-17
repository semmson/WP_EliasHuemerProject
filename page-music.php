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
					<video class="video" autoplay loop muted>
						<source src="<?= get_template_directory_uri() ?>/images/liddleviddle_small.mp4" type="video/mp4" />
					</video>
					
					<h2 style="text-align: center">coming soon..</h2>
				</section>
		</div>

<?php 
get_footer();
