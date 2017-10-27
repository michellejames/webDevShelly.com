
<?php
  $backgroundImage = get_field("background_image", "option");
?>

	<?php get_header(); ?>
	<div class="background-image" style="background-image: url(<?php echo $backgroundImage; ?>)">
		<h2 class="typography">Welcome</h2>
	</div>

	<div class="header-section">
		<div class="profile-picture" style="background-image: url(<?php the_field("headshot"); ?>)"></div>
		<h1 class="headline"><?php the_field("headline"); ?></h1>
		<p class="subline"><?php the_field("paragraph"); ?></p>
		<p class="email"><?php the_field("e-mail"); ?></p>
	</div>

<?php get_footer(); ?>