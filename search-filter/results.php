<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() )
{
	?>

	Found <?php echo $query->found_posts; ?> Results<br />
	Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br />

	<div class="pagination">

		<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>
	<div class="grid-inspiration">
  <div class="grid-sizer-inspiration"></div>
	<?php
	while ($query->have_posts())
	{
		$query->the_post();
		?>
		<div class="grid-item-inspiration">
				<div class="card-content">

					<a href="<?php the_field('product-link'); ?>"><img src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url( array(350, 500) );} ?>" class="image"/></a>
					<!--<?php the_field('shoppable_button'); ?>-->
					<h3><?php the_title(); ?></h3>
					<!--<h3><?php the_field('product-price'); ?></h3>-->
					<ul class="room-styles-arrangement">
							<li><?php the_field('room'); ?></li>
							<li><?php the_field('styles'); ?></li>
						  <li><?php the_field('arrangement'); ?></li>
					</ul>
			</div>
		</div>
		<?php
	}
	?>
</div>

	<div class="pagination">

		<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>
	<?php
}
else
{
	echo "No Results Found";
}
?>
