<?php get_header(); ?>

<div id="single" class="content clearfix">
	<div class="wrap">
        <section class="col-01">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <article class="post">
                <header>
                    <h2 class="entry-title">
                        <a title="<?php the_title_attribute(); ?>" rel="bookmark"
                           href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <aside class="clearfix">
                        <p class="small"><?php the_time('j \d\e F \d\e Y') ?></p>

                        <p class="commentCount"><?php comments_popup_link('Nenhum comentário »', '1 Comentário »', '% Comentários »'); ?></p>
                    </aside>
                    <aside class="share clearfix">
                        <a href="http://twitter.com/share"
                           class="twitter-share-button"
                           data-url="<?php the_permalink() ?>"
                           data-via="desconfweb">
                            Tweet
                        </a>
                        <fb:like href="<?php the_permalink() ?>" show_faces="false" width="400"
                                 font="" send="true" class="fbLike"></fb:like>
                    </aside>

                </header>

                <div class="podcast"><?php the_content(); ?></div>

                <footer>
                    <?php the_tags('<ul class="the-tags clearfix"><li>','</li><li>', '</li></ul>');?>


                </footer>

                <aside id="comentarios">
                    <?php comments_template(); ?>
                </aside>
            </article>

        <?php endwhile; endif; ?>
            </section>

        <?php get_sidebar(); ?>
    </div>


</div><!-- eo .content -->


<?php get_footer(); ?>