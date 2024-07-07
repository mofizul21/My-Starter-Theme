<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                esc_html(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'my-starter-theme')),
                number_format_i18n(get_comments_number())
            );
            ?>
        </h2>

        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ul',
                'short_ping' => true,
            ));
            ?>
        </ul>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php
    if (!comments_open()) :
    ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'my-starter-theme'); ?></p>
    <?php
    endif;

    comment_form();
    ?>
</div>