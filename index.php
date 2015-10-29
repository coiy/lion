<?php get_header(); ?>
<div id="contents">
	<div id="main_contents">
		<div id="side_menu">
			<div class="main_list pc">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
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

<?php get_footer(); ?>
