<?php get_header(); ?>

<div class="row">
	
	<?php
	$args = array (
		"post_type" => "work",
		"post_per_page" => -1,
		"post_status" => "publish",

	);
	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>
			  <div class="col-xs-6 col-md-3">
			    <a href="<?php the_permalink(); ?>" class="thumbnail">
			      <img src="<?php the_field("thumbnail") ?>">
			      <p><?php echo the_field("description"); ?></p>
			    </a>
			  </div>
			<?php
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}

	?>
</div>

<?php get_footer(); ?>
