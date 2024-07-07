<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <header>
            <h1><?php the_archive_title(); ?></h1>
            <p><?php the_archive_description(); ?></p>
        </header>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
        <div><?php the_posts_navigation(); ?></div>
    <?php else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'my-starter-theme'); ?></p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>