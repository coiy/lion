<?php get_header(); ?>

<?php
if(have_posts()) {
	while(have_posts()) {
			the_post();
			_e("Category", 'lion');
			the_category('&gt;', 'multiple');
			?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_post_thumbnail(small-thumbnail); ?>
					<?php the_content(); ?>
<?php
	}
}
?>
