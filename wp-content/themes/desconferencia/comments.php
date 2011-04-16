<?php  // Do not delete these lines
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if (!empty($post->post_password)) { // if there's a password
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { // and it doesn't match the cookie
        ?>

    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'minimalism'); ?></p>

    <?php
                return;
    }
}

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
<h3 id="comments">
    <?php comments_number('Nenhum comentário', 'Um comentário', '% Comentários');?> <?php printf('para &#8220;%s&#8221;', the_title('', '', false)); ?></h3>

    <ul id="commentList">

        <?php foreach ($comments as $comment) : ?>

            <li id="comment-<?php comment_ID() ?>" class="commentEntry">
                <p class="avatarAndName clearfix">
                    <?php echo get_avatar($comment, 32); ?>
                    <cite><?php comment_author_link() ?></cite>
                </p>

                <?php if ($comment->comment_approved == '0') : ?>
                    <em id="awaitingBlock">Comentário aguardando moderação.</em>
                <?php endif; ?>

                <aside class="commentText">
                    <small class="commentmetadata">
                        <a href="#comment-<?php comment_ID() ?>"
                              title="">Em <?php comment_date() ?> às <?php comment_time() ?></a> <?php edit_comment_link('Editar', '&nbsp;&nbsp;', ''); ?>
                    </small>
                </aside>

                <section class="coment_text">
                    <?php comment_text() ?>
                </section>

            </li>

        <?php endforeach; /* end for each comment */ ?>

    </ul>

<?php else : // this is displayed if there are no comments so far ?>

    <?php if ('open' !== $post->comment_status) : ?>
        <p class="nocomments">Comentários estão encerrados</p>
    <?php endif; ?>

<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

    <h3 id="respond">Comente!</h3>

    <?php if (get_option('comment_registration') && !$user_ID) : ?>
        <p><?php printf("Você precisa estar <a href=\"%s\">logado</a> para comentar.", get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

        <?php if (false && $user_ID) : ?>

            <p><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.', 'minimalism'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?>
                <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout"
                   title="<?php _e('Log out of this account', 'minimalism'); ?>"><?php _e('Log out &raquo;', 'minimalism'); ?></a>
            </p>

        <?php else : ?>

            <p class="clearfix">
                <input type="text" name="author" id="author"
                       value="<?php echo $comment_author; ?>" tabindex="1" required placeholder="Nome" />

                <input type="email" name="email" id="email"
                       value="<?php echo $comment_author_email; ?>" tabindex="2" required placeholder="Email" />
            </p>

            <?php
            /*
                <p>
                    <input type="url" name="url" id="url"
                           value="<?php echo $comment_author_url; ?>" tabindex="3" placeholder="Site" />
                </p>
            */
            ?>
        <?php endif; ?>

        <p>
            <textarea name="comment" id="comment" tabindex="4" required ></textarea>
        </p>

        <p>
            <input name="submit" type="submit" id="submit" tabindex="5" value="Enviar comentário"/>
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>"/>
        </p>
        <?php do_action('comment_form', $post->ID); ?>

    </form>

    <?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
