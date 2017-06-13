<?php get_header(); ?>

<!-- Get About Page (ID 62)-->
<?php $my_query = new WP_Query('page_id=62');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;?>

  <section id="about">

    <div class="about-content">
      <?php the_content(); ?>
      <a class="cta" href="/#contact">Let's Work Together</a>
    </div>

  </section>

<?php endwhile; ?>

<!-- Get Projects Custom Post Type -->
<section id="work">
  <p class="projects-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <div class="projects">
    <?php
      $loop = new WP_Query( array( 'post_type' => 'Project' ) );
    ?>

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <article id="project-<?php echo get_the_ID(); ?>" class="project">
        <h3><?php echo get_the_title(); ?></h3>
        <img src="<?php echo the_field('thumbnail'); ?>" alt="<?php echo get_the_title(); ?>">
        <!-- project modal -->
        <script type="text/javascript">
        (function ($, root, undefined) {
          $(function () {


            $('#project-<?php echo get_the_ID(); ?>').click(function() {
              $('.wrapper').append('<article class="project-modal"><img id="closemenubutton" class="closemodal" src="<?php echo get_template_directory_uri(); ?>/img/icons/close.png" alt="Close"><iframe src="<?php echo get_the_permalink(); ?>"></iframe></article>');
              $('section').css('pointer-events', 'none');
              $('body').css('overflow', 'hidden');
            });

            $('section').click(function() {
              $('project-modal').remove();
            });

          });
        })(jQuery, this);
        </script>
      </article>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>

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
