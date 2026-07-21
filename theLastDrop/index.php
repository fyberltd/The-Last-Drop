<?php get_header(); ?>

<?php /* get_template_part('content', get_post_format()) */ ?>

<div id="default_layout">

	<?php // check if there are any layout rows on the page 
	?>
	<?php if (have_rows('layout')) : ?>
		<h2>Have rows ('layout')</h2>

		<?php global $post;
		$pageName = $post->post_name; ?>

		<main id="page-<?php echo $pageName ?>" class="layout">
			<?php while (have_rows('layout')) : the_row();

				echo '<pre>';
				print_r(the_row());
				echo '</pre>';

				// if layout rows are found get the template for the layout row from layout/{layoutname} and add it this template
				// $templatename = 'components/' . get_row_layout() . '/' . get_row_layout();


				// $templatename = 'z-acf-layout/' . get_row_layout() . '/' . get_row_layout();
				$templatename = 'z-acf-layout/' . get_row_layout();

				// get_template_part($templatename);
				// echo $templatename;

				// get_template_part('layout', get_row_layout());
				// get_template_part('z-acf-layout/' . get_row_layout());
			?>

				<h3>Row</h3>
				<h5><?php echo $templatename; ?></h5>
				<?php get_template_part($templatename); ?>


			<?php endwhile ?>
		</main>

	<?php endif; ?>
</div>

<?php get_footer(); ?>