<?php get_header(); ?>

<div id="slottet">
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/text_sofienbergslottet.png" />
</div>

<div id="frontpage_images">
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/frontpage/sofienberg_kirke.jpg" />
    <img src="<?php bloginfo( 'template_directory' ); ?>/images/frontpage/sofienberg_kirke.jpg" />
    <img src="<?php bloginfo( 'template_directory' ); ?>/images/frontpage/sofienberg_kirke.jpg" />
    <img src="<?php bloginfo( 'template_directory' ); ?>/images/frontpage/sofienberg_kirke.jpg" class="last" />
</div>

<div id="menu"><ul><?php wp_page_menu('show_home=1&title_li=&depth=1'); ?></ul></div>
<hr class="menu_hr" />

	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small>Skrevet <?php the_time('j. F, Y') ?> av <?php the_author() ?></small>
				<?php the_post_thumbnail('index-news')?>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php if (function_exists('the_tags')) { the_tags('Tags: ', ', ', '<br/>'); } ?>Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>
<?php include(TEMPLATEPATH."/left.php");?>
<?php include(TEMPLATEPATH."/right.php");?>

<?php get_footer(); ?>
