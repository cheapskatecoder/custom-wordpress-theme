<?php get_header(); ?>
<?php
if(have_posts()):
    while(have_posts()):
        the_post();
?>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-8 col-lg-8">
			<h2><?php echo the_title(); ?></h2>
			<small class="post-date">Created on <?php the_time('F j Y') ?> Author: <?php the_author(); ?></small>
            <small class="post-date"></small>
			<br>
			<div class="">
				<?php the_content(); ?>
			</div>
		</div>
    </div>
</div>

<?php endwhile;
    endif;
?>
<?php get_footer(); ?>