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
					<header id="header">
						<a href="index.html" class="logo">Massively</a>
					</header>

				<!-- Nav -->
					<?php get_template_part("template-parts/navbar") ?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<span class="date">April 25, 2017</span>
									<h1><?= the_title()?></h1>
									
								</header>
								<div class="image main"><img src="<?= get_the_post_thumbnail_url() ?>" alt="" /></div>
								<p><?= the_content()?></p>
							</section>

					</div>

<?php 
get_footer();
