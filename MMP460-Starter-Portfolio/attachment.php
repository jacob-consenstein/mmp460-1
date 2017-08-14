<?php
// This page is a template for media attachments 
?>

<!-- Page header -->           

<?php get_header();?>

      <div id="main">
      

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<!-- Image title-->           

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!-- Full size image -->           
			
            <div class="entry-attachment">
<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "full"); ?>
                        <p class="attachment"><a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
                        </p>
<?php else : ?>
                        <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
<?php endif; ?>
                        </div>
                        
 <!-- Image description -->           
                       
       <?php the_content(); ?>

		<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

<!-- Page footer -->           

 <?php get_footer();?>
 


