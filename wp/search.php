<?php get_header() ?>
<main class="main">
    <div class="container">
        <div class="scroll-menu">
            <?php get_sidebar(); ?>
            <div class="page">
                <?php
                    $args = array(
                        'orderby' => 'date',
                        'order' => 'DESC',
                        's' => get_search_query(),
                        'post_per_page' => '4',
                        'paged' => 1,
                    );
                    $query = new WP_Query( $args );
                ?>
                <?php if($query->have_posts()) : ?>
                    <h1 class="title"><?php the_search_query(); ?></h1>
                    <p class="search__result"> 
                        <?php
                            if ($wp_query->found_posts % 10 == 1) {
                                $find = "Найден ";
                              } else {
                                $find = "Найдено ";
                            };
                            echo $find;
                            global $wp_query;
                            echo $wp_query->found_posts;
                            if ($wp_query->found_posts % 10 == 1) {
                                $result = " результат";
                              } elseif ($wp_query->found_posts % 10 == 2 || $wp_query->found_posts % 10 == 3 || $wp_query->found_posts % 10 == 4) {
                                $result = " результата";
                              } else {
                                $result = " результатов";
                            };
                            echo $result;
                        ?>
                    </p>
                    <div class="article">
                        <?php while($query->have_posts()) : $query->the_post(); ?>
                            <article class="article__item">
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
                    <?php
                    $term = sanitize_text_field($_GET['s']);
                        if(empty($term)){
                        $term = get_search_query();
                        }
                        echo do_shortcode('[ajax_load_more container_type="div" post_type="post" search="'. $term .'" posts_per_page="4" scroll="false" transition_container_classes="article" button_label="Загрузить ещё" destroy_after="no_more_posts"]');
                    ?>
                <?php else : ?>
                    <h1 class="title">По поиску <?php the_search_query(); ?> Ничего не&nbsp;найдено</h1>
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
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>