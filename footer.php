<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

				<!-- Footer -->
					<footer id="footer">
						<section>
									<div class="image"><img class="logo" src="<?= get_template_directory_uri() ?>/images/logo.png" alt="" /></div>
									<ul class="icons alt">
									<li><a target="_blank" href="https://www.youtube.com/watch?v=0a7zjnjoraA&ab_channel=EliasHuemer" class="icon brands alt fa-youtube"><span class="label">Youtube</span></a></li>
									<!-- <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li> -->
									<li><a target="_blank" href="https://www.instagram.com/eliashuemerproject/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a target="_blank" href="#" class="icon brands alt fa-spotify"><span class="label">Spotify</span></a></li>
								</ul>
						</section>
						<!-- <section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section> -->
						<!-- <section class="contact"> -->
							<!-- <section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section> -->

							
						<!-- </section> -->
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Elias Huemer Project 2025</li><li>Website by Daniel Semmelrock and <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div> <!-- Wrapper closed -->

		<!-- Scripts -->
			<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.min.js"></script>
			<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.scrollex.min.js"></script>
			<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.scrolly.min.js"></script>
			<script src="<?= get_template_directory_uri() ?>/src/js/default/browser.min.js"></script>
			<script src="<?= get_template_directory_uri() ?>/src/js/default/breakpoints.min.js"></script>
			<script src="<?= get_template_directory_uri() ?>/src/js/default/util.js"></script>
			<script src="<?= get_template_directory_uri() ?>/src/js/default/main.js"></script>

	</body>
</html>

<?php wp_footer(); ?>
