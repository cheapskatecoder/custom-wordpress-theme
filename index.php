<?php 
/* 
Template Name: All Posts
*/
?>
<?php get_header() ?>

<div class="container">
	<div class="row">
<?php $wpdb = new WP_Query(array(
            'post_type'=>'post',
            'post_status' => 'any',
            'posts_per_page' => 10));
          
            if($wpdb->have_posts()):
                while($wpdb->have_posts()):
                    $wpdb->the_post();
            ?>
            <a href="<?php echo the_permalink(); ?>">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4  my-3 service1">
			<br> 
            <img class="img-fluid" src="<?php if (the_post_thumbnail()): the_post_thumbnail(); else:echo bloginfo('template_url').'/assets/img/ghost404.png';endif; ?>">
					<p class="excerpt"><?php the_excerpt(); ?>
					<a href="<?php echo the_permalink(); ?>" class="cta">Read More <span class="ti-angle-right"></a>
            </div>
            </a>
            <?php
            // get_template_part('blog-show');
                endwhile;
            endif;
            ?>
	</div>
</div>
<?php get_footer(); ?>