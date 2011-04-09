<?php get_header(); ?>

<section id="content" class="narrowcolumn">
    <?php // removendo temporariamente os comentários do facebook ?>
    <?php if (false && is_home()) : ?>
        <div id="fb-root"></div>
    <script src="http://connect.facebook.net/pt_BR/all.js#appId=146279298734280&amp;xfbml=1"></script><fb:comments href="desconferencia.com.br" num_posts="2" width="450"></fb:comments>
    <?php endif; ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post" id="post-<?php the_ID(); ?>">
        <header>
            <h2>
                <a href="<?php the_permalink() ?>" rel="bookmark"
                   title="<?php printf('Link Permanente para %s', the_title_attribute('echo=0')); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
        </header>
        <small>Em <?php the_time(__('F jS, Y', 'minimalism')) ?></small>
        <p><?php comments_popup_link('Nenhum comentário »', '1 Coentário »', '% Comentários »'); ?></p>

        <aside id="shareButtons">
            <div class="facebook-button">
                <script src="http://connect.facebook.net/pt_BR/all.js#xfbml=1"></script>
                <fb:like href="<?php the_permalink() ?>" show_faces="true" width="330" font=""></fb:like>
            </div>
            <div class="twitter-button">
                <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>"
                   data-via="desconfweb">Tweet</a>
                <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
            </div>
        </aside>

        <section class="entry">
            <?php the_content(__('Read the rest of this entry &raquo;', 'minimalism')); ?>
        </section>
        <footer>

            <p class="postmetadata">
                <?php the_tags(__('Tags:', 'minimalism') . ' ', ', ', '<br />'); ?>
                <?php printf(__('Posted in %s', 'minimalism'), get_the_category_list(', ')); ?>
                | <?php edit_post_link(__('Edit', 'minimalism'), '', ' | '); ?>
                <?php comments_popup_link(__('No Comments &#187;', 'minimalism'), __('1 Comment &#187;', 'minimalism'), __('% Comments &#187;', 'minimalism'), '', __('Comments Closed', 'minimalism')); ?>
            </p>
        </footer>
    </article>

    <?php endwhile; ?>

    <nav class="navigation">
        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'minimalism')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'minimalism')) ?></div>
    </nav>

    <?php else : ?>

    <h2 class="center">Nada encontrado.</h2>
    <p class="center">Rolou um erro 404 para o que você estava tentando (ou não) acessar.</p>

    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
    <?php endif; ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>