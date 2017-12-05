<?php

get_header(); ?>

<div class='wrap'>
	<main id='main' class='content' role='main'>
		<section class='error-404 not-found'>
			<header class='page-header'>
				<h1 class='page-title'><?php esc_html_e('Crabapples! This page could not be found', 'pianosa'); ?></h1>
			</header> <!-- .page-header -->
			<div class='page-content'>
				<p><?php esc_html_e('Nothing was found at this location. Try another search', 'pianosa'); ?></p>

				<?php get_search_form(); ?>

			</div> <!-- .page-content -->
		</section> <!-- .error-404 -->
	</main> <!-- #main -->
</div> <!-- .wrap -->

<?php

get_footer();
