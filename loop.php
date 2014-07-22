 <div id="slideshow_cont">
        <div id="slideshow">       
            <?php  
            $slider_arr = array();
            $x = 0;
            $args = array(
             //'category_name' => 'blog',
             'post_type' => 'post',
             'meta_key' => 'ex_show_in_slideshow',
             'meta_value' => 'Yes',
             'posts_per_page' => 10
            );
            query_posts($args);
            while (have_posts()) : the_post(); ?>         
            <div class="slide_cont <?php if($x == 0) { ?>active<?php } ?>">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-slideshow'); ?></a>               
            </div><!--//slide_cont-->
            <?php array_push($slider_arr,get_the_ID()); ?>
            <?php $x++; ?>
            <?php endwhile; ?>  
            <?php wp_reset_query(); ?>                       
        </div><!--//slideshow-->
    </div><!--//slideshow_cont-->
<div id="boxes">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="box">
		<div class="rel">
          <?php the_title(); the_content(); the_permalink();?>
			<?php if ( has_post_thumbnail() ) { ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('squareThumb'); ?></a>
		<?php } else { ?>
        <!--
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  <img src="<?php echo get_template_directory_uri(); ?>/images/def.png" alt="<?php the_title(); ?>" class="aligncenter" />
</a>
-->
<?php } ?>	
		</div>
	</div>

<?php endwhile; ?>
</div>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>

<div class="wrap-pagin">
	<div class="alignleft"><?php next_posts_link(esc_html__('Older Posts','photobook')) ?></div>
	<div class="alignright"><?php previous_posts_link(esc_html__('Newer Posts', 'photobook')) ?></div>
</div>


<?php endif; ?>
