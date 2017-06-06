<?php get_header(); ?>

<!-- Get About Page (ID 62)-->
<?php $my_query = new WP_Query('page_id=62');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;?>

  <section id="about">

      <?php the_content(); ?>

  </section>

<?php endwhile; ?>

<!-- Get Projects Custom Post Type -->
<section id="projects">
  <?php
    $loop = new WP_Query( array( 'post_type' => 'Project' ) );
  ?>

  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a href="<?php echo get_the_permalink(); ?>"
      <article class="project">
        <h2><?php echo get_the_title(); ?></h2>
        <img src="<?php echo the_field('thumbnail'); ?>"
      </article>
    </a>
  <?php
    endwhile;
    wp_reset_postdata();
  ?>

</section>

<!-- Get Contact Page (ID 68)-->
<?php $my_query = new WP_Query('page_id=68');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;?>

  <section id="contact">

      <?php the_content(); ?>

  </section>

<?php endwhile; ?>

<?php get_footer(); ?>
