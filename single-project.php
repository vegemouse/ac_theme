<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?></span>
			<!-- /post details -->

			<!-- post description -->
			<p class="description"><?php echo the_field('project_description'); ?></p>

      <!-- images -->
      <div class="photos">
        <?php
        $images = get_field('project_images');
        if( $images ): ?>
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo $image['url']; ?>">
                             <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
      </div>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?><br>

      <span onclick="history.go(-1);">Go Back</span>

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

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
