<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-loop">
        <header>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          Oleh: <?php the_author(); ?>
        </header>
        <?php the_excerpt(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Maaf, tidak ada posting yang ditemukan!</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>