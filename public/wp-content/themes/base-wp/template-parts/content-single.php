<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Base WP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <?php igthemes_before_single_title(); ?>
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php igthemes_after_single_title(); ?>

        <div class="entry-meta">
            <?php igthemes_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php igthemes_before_single_content(); ?>
          <?php if ( igthemes_option('main_post_content', 'full ') ) {
                the_content();
                } else {
                the_excerpt();
                }
            ?>
        <?php igthemes_after_single_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'base-wp' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php igthemes_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->

