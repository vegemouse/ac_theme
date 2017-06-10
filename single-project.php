<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" class="post-modal" style="max-width: 100vw; overflow-x: hidden;">

			<!-- post title -->
			<h1><?php the_title(); ?></h1>
			<!-- /post title -->

			<!-- post description -->
			<?php echo the_field('project_description'); ?>

	    <!-- images -->
	    <div class="photos">
	      <?php
	      $images = get_field('project_images');
	      if( $images ): ?>
          <ul>
            <?php foreach( $images as $image ): ?>
              <li>
                 <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php if( $image['caption'] ): ?>
                	<p class="photo-caption"><?php echo $image['caption']; ?></p>
								<?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
	      <?php endif; ?>
	    </div>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
	<script type="text/javascript">
	(function ($, root, undefined) {
		$(function () {

			// Make all a tags open in new window so client doesn't need to specify "target _blank" on tags.
			$('a').attr('target', '_blank');

		});
	})(jQuery, this);
	</script>
</body>
</html>
