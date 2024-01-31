<?php get_header() ?>
<main class="main">
    <div class="container">
        <div class="scroll-menu">
            <?php get_sidebar(); ?>
            <div class="page">
                <h1 class="title">Интернет-журнал<span>для фронтендеров и не только</span></h1>
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'post_per_page' => '4',
                    );
                    $query = new WP_Query( $args );
				
                ?>
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
                                            <?php
												$post_id = get_the_ID();
												echo number_format(track_post_views($post_id));
												?>
                                        </span>
                                        <span class="article__time">
                                            <?php echo reading_time();?>
                                        </span>
                                        <a href="<?php the_permalink(); ?>" class="article__link">Читать далее</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php wp_reset_postdata(); endwhile; ?>
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
                        <p>Нажимая на кнопку «подписаться», я&nbsp;даю согласие на <a href="https://frontendblok.com/pdf/Политика обработки персональных Frontend Blok.pdf" target="_blank">обработку персональных данных</a></p>
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
                                $categories = get_the_category($p['ID']);
                                if ( ! empty( $categories ) ) {
                                    echo '<a class="article__category ' . esc_attr( $category_class = $categories[0]->slug ) . '" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                }
                            ?>
                            <h3 class="article__title">
                                <a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a>
                            </h3>
                            <div class="article__info">
                                <div class="author">
                                    <a href="#"><?php echo get_avatar($author->ID, 52); ?></a>
                                    <div class="author__info">
                                        <h4 class="author__name"><a href="#"><?php the_author_meta('display_name', $post->post_author); ?></a></h4>
                                        <span class="author__date">
                                            <?php 
                                                $date = date_i18n('j F Y', strtotime($p['post_date']));
                                                echo $date;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="article__footer">
                                    <span class="article__views">
                                        <?php 
                                            echo number_format(track_post_views($p['ID']));
                                        ?>
                                    </span>
                                    <span class="article__time">
                                        <?php echo reading_time($p['ID']);?>
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