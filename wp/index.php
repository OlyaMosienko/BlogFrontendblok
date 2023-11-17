<?php get_header() ?>
<main class="main">
    <div class="container">
        <div class="scroll-menu">
            <?php get_sidebar(); ?>
            <div class="page">
                <h1 class="title">Интернет-журнал<span>для фронтендеров и не только</span></h1>
                <div class="article">
                    <?php
                        $args = array(
                            'numberposts' => 4,
                            'offset' => 0,
                        );
                        $result = wp_get_recent_posts( $args );

                        foreach( $result as $p ){
                            $thumbnail = get_the_post_thumbnail($p['ID'], 'large');
                            ?>
                            <article class="article__item">
                                <div class="article__thumb">
                                    <a href="<?php echo get_permalink($p['ID']) ?>">
                                        <?php echo $thumbnail;?>
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
                                        <a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a>
                                    </h3>
                                    <div class="article__info">
                                        <div class="author">
                                            <a href="#"><?php echo get_avatar($author->ID, 56.8); ?></a>
                                            <div class="author__info">
                                                <h4 class="author__name"><a href="#"><?php the_author_meta('display_name', $post->post_author); ?></a></h4>
                                                <span class="author__date">
                                                    <?php 
                                                        $date = date_i18n('j F, Y', strtotime($p['post_date']));
                                                        echo $date;
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="article__footer">
                                            <span class="article__views">
                                                <?php 
                                                    // echo getPostViews( $post->ID );
                                                    // setPostViews( $post->ID );
                                                    echo do_shortcode('[views]');
                                                ?>
                                            </span>
                                            <span class="article__time">
                                                <?php echo reading_time();?>
                                            </span>
                                            <a href="<?php echo get_permalink($p['ID']) ?>" class="article__link">Читать далее</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                    <?php } ?>
                </div>
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
                <div class="article">
                    <?php
                        $args = array(
                            'numberposts' => 2,
                            'offset' => 4,
                        );
                        $result = wp_get_recent_posts( $args );

                        foreach( $result as $p ){
                            $thumbnail = get_the_post_thumbnail($p['ID'], 'large');
                    ?>
                    <article class="article__item">
                        <div class="article__thumb">
                            <a href="<?php echo get_permalink($p['ID']) ?>">
                                <?php echo $thumbnail;?>
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
                                <a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a>
                            </h3>
                            <div class="article__info">
                                <div class="author">
                                    <a href="#"><?php echo get_avatar($author->ID, 56.8); ?></a>
                                    <div class="author__info">
                                        <h4 class="author__name"><a href="#"><?php the_author_meta('display_name', $post->post_author); ?></a></h4>
                                        <span class="author__date">
                                            <?php 
                                                $date = date_i18n('j F, Y', strtotime($p['post_date']));
                                                echo $date;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="article__footer">
                                    <span class="article__views">
                                        <?php 
                                            // echo getPostViews( $post->ID );
                                            // setPostViews( $post->ID );
                                            echo do_shortcode('[views]');
                                        ?>
                                    </span>
                                    <span class="article__time">
                                        <?php echo reading_time();?>
                                    </span>
                                    <a href="<?php echo get_permalink($p['ID']) ?>" class="article__link">Читать далее</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>