<?php get_header() ?>

<main class="main">
    <div class="container">
        <div class="scroll-menu">
            <?php get_sidebar(); ?>
            <div class="page category">
                <div class="page-title">
                    <h1 class="title">Код</h1>
                    <div class="tag__list tag-swiper tagSwiper">
                        <div class="swiper-wrapper">
                            <?php
                                $tags = get_tags( array('hide_empty' => false) ); // Получаем все теги

                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<a class="swiper-slide tag-swiper__link" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>'; // Выводим ссылки на теги
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php 
                    $tag_slug = get_query_var( 'tag' );
                    $tag = get_term_by('slug', $tag_slug, 'post_tag');
                    $tag_id = $tag->term_id;
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'tag_id' => $tag_id,
                        'post_per_page' => '-1',
                    );
                    $query = new WP_Query( $args );
                ?>
                <?php if ( $query->have_posts() ) : ?>
                <div class="article">
                    <?php while($query->have_posts()) : $query->the_post(); ?>
                        <article class="article__item">
                            <div class="article__thumb">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </a>
                            </div>
                            <div class="article__about">
                                <a href="category.html" class="article__category">Код</a>
                                    <?php 
                                    $posttags = get_the_tags();

                                    if ( $posttags ) {
                                        echo '<a href="'.get_tag_link($posttags[0]->term_id).'" class="article__tag">#' . $posttags[0]->name . '</a>';
                                    }
                                ?>
                                <h3 class="article__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="article__info">
                                <div class="author">
                                        <a href="#"><?php echo get_avatar($author->ID, 50); ?></a>
                                        <div class="author__info">
                                            <h4 class="author__name"><a href="#"><?php the_author_meta('display_name', $post->post_author); ?></a></h4>
                                            <span class="author__date"><?php echo get_the_date('j F Y'); ?></span>
                                        </div>
                                    </div>
                                    <div class="article__footer">
                                        <span class="article__views">
                                            <?php echo do_shortcode('[views]'); ?>
                                        </span>
                                        <span class="article__time">
                                            <?php echo reading_time();?>
                                        </span>
                                        <a href="<?php the_permalink(); ?>" class="article__link">Читать далее</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <?php else : ?>
                    <h1 class="title">Ничего не найдено</h1>
                    <p class="search__result">Но, вы можете почитать другие полезные статьи нашего журнала</p>
                    <div class="post__recommend">
                        <div class="recommend-swiper__head">
                            <h2>Похожие статьи</h2>
                            <div class="recommend-swiper__nav">
                                <div class="swiper-button-prev recommend-swiper__prev"></div>
                                <div class="swiper-button-next recommend-swiper__next"></div>
                            </div>
                        </div>
                        <div class="swiper recommend-swiper">
                            <div class="swiper-wrapper">
                            <?php
                                $query_args = array(
                                    'post_per_page' => '2',
                                    'paged' => get_query_var('paged') ?: 1,
                                    'post__not_in' => array($post->ID)
                                );
                            ?>
                            <?php wp_reset_query(); $query = new WP_Query($query_args); ?>
                                <?php if($query->have_posts()) {
                                    while($query->have_posts()) {
                                        $query->the_post();
                                ?>
                                <div class="swiper-slide article__item recommend-swiper__item">
                                    <div class="article__thumb">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'large' ); ?>
                                        </a>
                                    </div>
                                    <div class="article__about">
                                        <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {
                                                echo '<a class="article__category ' . esc_attr( $category_class = $categories[0]->slug ) . '" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                            }
                                        ?>
                                        <h3 class="article__title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="article__info">
                                            <div class="author">
                                                <a href="#"><?php echo get_avatar($author->ID, 50); ?></a>
                                                <div class="author__info">
                                                    <h4 class="author__name"><a href="#"><?php the_author_meta('display_name'); ?></a></h4>
                                                    <span class="author__date"><?php echo get_the_date('j F Y'); ?></span>
                                                </div>
                                            </div>
                                            <div class="article__footer">
                                                <span class="article__views">
                                                    <?php echo do_shortcode('[views]'); ?>
                                                </span>
                                                <span class="article__time">
                                                    <?php echo reading_time();?>
                                                </span>
                                                <a href="<?php the_permalink(); ?>" class="article__link">Читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <section class="subscribe">
                    <div class="subscribe__box">
                        <h2 class="subscribe__title">Получайте первыми свежие статьи прямо на вашу почту</h2>
                        <div class="subscribe__area">
                            <input type="email" placeholder="Ваш e-mail" class="subscribe__input">
                            <button type="submit" class="button">подписаться</button>
                        </div>
                    </div>
                    <div class="subscribe__agreement">
                        <p>Нажимая на кнопку «подписаться», я&nbsp;даю согласие на <a href="https://annblok.ru/workshop" target="_blank">обработку персональных данных</a></p>
                    </div>
                </section>
                <button type="submit" class="button loadmore">загрузить ещё</button>
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>