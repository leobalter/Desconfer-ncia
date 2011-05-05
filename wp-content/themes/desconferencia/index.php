<?php get_header(); ?>

<!-- content -->
<div class="content clearfix">
    <!-- quem somos -->
    <a class="saiba-mais" href="javascript:void(0)" title="Saiba mais sobre a Desconferência">Saiba mais sobre a Desconferência</a>

    <section class="quem-somos">
        <div class="wrap">
            <div class="quem-somos-txt">
                <h2>Quem somos</h2>

                <p>O Desconferência é um projeto informal com a missão de comentar assuntos ligados ao desenvolvimento web de forma descontraída, seja front-end ou back-end. É feito por profissionais conhecidos da área e conta sempre com excelentes convidados.</p>
            </div>
            <ul class="equipe">
                <li>
                    <a href="http://www.bernarddeluna.com" title="Bernard De Luna">
                        <img src="<?php bloginfo('template_url'); ?>/img/img-bernard.jpg" alt="Bernard De Luna"/>
                        <span>@bernarddeluna</span>
                    </a>
                </li>

                <li>
                    <a href="http://leobalter.net" title="Leo Balter">
                        <img src="<?php bloginfo('template_url'); ?>/img/img-leonardo.jpg" alt="Leo Balter"/>
                        <span>@leobalter</span>
                    </a>
                </li>

                <li>
                    <a href="http://suissacorp.com.br/suissa" title="Jean 'Suissa' Nascimento">
                        <img src="<?php bloginfo('template_url'); ?>/img/img-suissa.jpeg" alt="Jean 'Suissa' Nascimento"/>
                        <span>@osuissa</span>
                    </a>
                </li>

                <li>
                    <a href="http://jaydson.org" title="Jaydson Gomes">
                        <img src="<?php bloginfo('template_url'); ?>/img/img-jaydson.png" alt="Jaydson Gomes"/>
                        <span>@jaydson</span>
                    </a>
                </li>

                <li>
                    <a href="http://felipenmoura.org" title="Felipe Moura">
                        <img src="<?php bloginfo('template_url'); ?>/img/img-felipe.jpg" alt="Felipe Moura"/>
                        <span>@felipenmoura</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- /quem somos -->

    <?php if (is_home()) : ?>

    <?php
        // faço query apenas para último artigo

        $queryParams = array(
            'posts_per_page' => 1,
            'paged' => 1,
        );

        query_posts( $queryParams );

    ?>
    <?php if (have_posts()) : the_post(); ?>
    <!-- destaque -->
    <section id="destaque">
        <div class="wrap">
            <article class="entry-content">

                <!-- titulo, player do podcast, tags e share -->
                <div class="post-preview">
                    <header>
                        <h2 class="entry-title">
                            <a title="<?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <aside class="clearfix">
                            <p class="small"><?php the_time('j \d\e F \d\e Y') ?></p>
                            <p class="commentCount"><?php comments_popup_link('Nenhum comentário »', '1 Coentário »', '% Comentários »'); ?></p>
                        </aside>

                        <aside class="share clearfix">
                            <a href="http://twitter.com/share"
                               class="twitter-share-button"
                               data-url="<?php the_permalink() ?>"
                               data-via="desconfweb">
                                Tweet
                            </a>
                            <fb:like class="fbLike" href="<?php the_permalink() ?>" show_faces="false" width="400" layout="button_count" font="" send="true"></fb:like>
                        </aside>

                        <?php the_tags('<ul class="the-tags  clearfix"><li>',',</li><li>', '</li></ul>');?>
                    </header>
                </div>
                <!-- / titulo, player do podcast, tags e share -->

                <!-- resumo -->
                <div class="post-excerpt">

                    <?php the_excerpt(); ?>

                </div>
                <!-- /resumo -->
            </article>
        </div>
    </section>
    <!-- /destaque -->
    <?php endif; ?>

    <?php

        // atributos para listagem comum de posts

        wp_reset_query(); // recupero query_posts original

        $queryNewParams = array(
            'offset' => 1,
            'paged=' . get_query_var( 'page' )
        );

        global $wp_query;
        $queryParams = array_merge( $wp_query->query, $queryNewParams );

        query_posts( $queryParams );

    ?>

    <?php endif; // is_home => query_posts especial só existe se for home mesmo ?>

    <div class="wrap">
        <div class="col-01">
            <!-- podcast-list -->
            <section class="podcast-list sep">
                <?php if (have_posts()) : ?>
                    <h3>Podcasts anteriores</h3>

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
                                <fb:like class="fbLike" href="<?php the_permalink() ?>" show_faces="false" width="450" font="" send="true"></fb:like>
                            </aside>

                        </header>

                        <div class="podcast"><?php the_excerpt(); ?></div>

                        <footer>
                            <?php the_tags('<ul class="the-tags clearfix"><li>','</li><li>', '</li></ul>');?>
                        </footer>

                    </article>

                <?php endwhile; endif; ?>
            </section>
            <!-- /podcast-list -->

            <?php /*
            <!-- tagcloud -->
            <div class="tagcloud sep">
                <h3>Sobre o que nós mais falamos</h3>

                <div>
                    <a href="#">aaaaa</a>, <a href="#">aaaaa</a>, <a href="#">aaaaa</a>, <a href="#">aaaaa</a>,
                </div>
            </div>
            <!-- /tagcloud -->

            */?>
        </div>


        <?php get_sidebar(); ?>
    </div>
</div>
<!-- eo .content -->

<?php get_footer(); ?>