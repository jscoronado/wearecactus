<?php
/**
 * Template Name: Home
 *
 * @package wearecactus
 */

get_header();
?>

	<div id="home" class="site-main">
		<div class="container">

			<div class="entry-content">
				<?php
					the_content();
				?>
			</div>

		</div>
	</div>

<?php
get_footer();
