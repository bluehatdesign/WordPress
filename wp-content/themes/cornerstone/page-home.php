<?php
/**
 * Template Name: Three columns
 * Description: Three columns
 *
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<!-- page-home.php -->
<div id="home-main" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
      <h2><?php the_title(); ?></h2>
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
  </article>
  <?php endwhile; endif; ?>

</div>
<div class="secondary">
  <?php get_sidebar(); ?>
</div>
<div class="tertiary"><!-- left column -->
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eros sem, convallis eu dictum vitae, convallis sed libero. Nulla in leo dolor. Sed sed venenatis nunc. Suspendisse nec est nec neque vulputate lacinia sit amet aliquam justo. Integer sit amet enim ante, ut pellentesque urna. Quisque eget orci ac leo auctor cursus. Morbi eu lorem sit amet tellus venenatis viverra.</p>
  
</div>


<?php get_footer(); ?>
