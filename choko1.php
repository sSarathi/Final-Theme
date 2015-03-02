<?php
/*
 * Template Name: choko1
 * Description: No Sidebar Page Template for globo theme
 */
?>

<?php get_header(); ?>


 <!-- Latest compiled and minified CSS -->
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   
<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>




<div class="row">
	<div class="col-sm-2">
		

	<?php query_posts('post_type=portfolio'); ?>
	</div>
	<div class="col-sm-7 blog-main">
		<div class="container">
            <div class="blog-header"> 
            <h1 class="blog-title"><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
            <p class="blog-description"><?php bloginfo('description');?><p>
        </div>
         



          </div>

		<?php //the loop ?>
		<div class="blog-post">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="blog-post-meta"><?php the_time('F j, Y g:i a'); ?> by <a href="#"><?php the_author(); ?></a></p>
			<?php the_content(); ?>
			 
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
				<?php echo "you have no posts" ?>
			<?php endif; ?>
		</div>
	</div>
	
		<div class="col-sm-3 sidebar">
			<?php dynamic_sidebar(sidebar1); ?>
		</div>	
</div>

<?php get_footer(); ?>
