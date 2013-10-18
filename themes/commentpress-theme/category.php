<?php get_header(); ?>



<!-- category.php -->

<div id="wrapper">



<div id="main_wrapper" class="clearfix">



<div id="page_wrapper">



<div id="content" class="clearfix">

<div class="post">



<?php if (have_posts()) : ?>

	<?php //$post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
								       <h3 class="post_title">TO DO: CREATE TITLE FOR TRANSLATION {and supress or alter individual post titles}</h3>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<h3 class="post_title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) AND !empty($_GET['paged'])) { ?>
	<h3 class="post_title">Archives</h3>
	<?php } ?>

	<?php $counter = 0; ?>

	
	<?php while (have_posts()) : the_post(); ?>

		<div class="search_result">

						   
		<!--	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3> -->
			
			<?php 
			if($counter == 0) {
			  echo  '<div class="content_left">' . "\n";
			  $counter = 1;
			}else{
			  echo '<div class="content_right">' . "\n";
			  $counter = 0;
			}
                         ?>


			<?php the_content() ?>
		
			<?php 
 
			echo '</p></div>';
                         ?>

	
	<?php endwhile; ?>

	
<?php else : ?>

	<h2 class="post_title">Not Found</h2>

	<?php get_search_form(); ?>

<?php endif; ?>



</div><!-- /post -->

</div><!-- /content -->



</div><!-- /page_wrapper -->



</div><!-- /main_wrapper -->



</div><!-- /wrapper -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>