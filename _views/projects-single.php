<?php include '_includes/header.php'; ?>

<main>
    <article>
        <div class="full-width has-brand-color-<?php echo $vars['background']; ?>-background-color has-white-color section--work-sample padding-bottom--xxl padding-top--xxl">
            <div class="container">
                <header class="flex flex--middle">
                    <div class="col col--12 col__sm--9">
                        <h1 class="text--uppercase letter-spacing--2 font--normal margin-top--none margin-bottom--none"><?php echo $vars['name']; ?></h1>
                    </div>
                    <div class="col col--12 col__sm--3 button-container">
						<?php if ( isset($vars['url'] ) ) : ?>
                            <div>
                                <a href="<?php echo $vars['url']; ?>" class="btn btn--outline btn--small" target="_blank">Visit Website</a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col col--12">
                        <p class="margin-top--none sans"><small><?php
                            $count = count($vars['tags']);
                            foreach( $vars['tags'] as $key=>$tag ) {
                                if ($count - 1 != $key) {
                                    echo $tag . ' | ';
                                } else {
                                    echo $tag;
                                }
                            }
                        ?></small></p>
                    </div>
                    <div class="col col--12 site-images-container">
                        <div class="site-images">
                            <picture>
                                <source type="image/webp" srcset="<?php the_project_image_srcset( $vars['slug'], 'alt', 'webp' ); ?>" sizes="(max-width: 879px) 28vw, 284px">
                                <source type="image/jpeg" srcset="<?php the_project_image_srcset( $vars['slug'], 'alt' ); ?>" sizes="(max-width: 879px) 28vw, 284px">
                                <img src="<?php the_images_dir( $vars['slug'] . '/' . $vars['slug'] . '-alt.jpg'); ?>" loading="lazy" decoding="async" alt="Embracing a simpler life screenshot of blog page" class="site-image alt-image">
                            </picture>
                            <picture>
                                <source type="image/webp" srcset="<?php the_project_image_srcset( $vars['slug'], 'main', 'webp' ); ?>" sizes="(max-width: 879px) 75vw, 760px">
                                <source type="image/jpeg" srcset="<?php the_project_image_srcset( $vars['slug'], 'main' ); ?>" sizes="(max-width: 879px) 75vw, 760px">
                                <img src="<?php the_images_dir( $vars['slug'] . '/' . $vars['slug'] . '-main.jpg'); ?>" loading="lazy" decoding="async" alt="Embracing a simpler life screenshot of home page" class="site-image main-image">
                            </picture>
                            <picture>
                                <source type="image/webp" srcset="<?php the_project_image_srcset( $vars['slug'], 'mobile', 'webp' ); ?>" sizes="(max-width: 879px) 21vw, 213px">
                                <source type="image/jpeg" srcset="<?php the_project_image_srcset( $vars['slug'], 'mobile' ); ?>" sizes="(max-width: 879px) 21vw, 213px">
                                <img src="<?php the_images_dir( $vars['slug'] . '/' . $vars['slug'] . '-mobile.jpg'); ?>" loading="lazy" decoding="async" alt="Embracing a simpler life screenshot of mobile site" class="site-image mobile-image">
                            </picture>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="full-width padding-top--lg padding-bottom--xxl">
            <div class="container content margin-top--xxl margin-bottom--xxl">
                <?php echo $vars['description']; ?>
                <figure class="wp-block-image size-large">
                    <picture>
                        <source type="image/webp" srcset="<?php the_project_image_srcset( $vars['slug'], 'main', 'webp' ); ?>" sizes="(max-width: 900px) 100vw, 900px">
                        <source type="image/jpeg" srcset="<?php the_project_image_srcset( $vars['slug'], 'main' ); ?>" sizes="(max-width: 900px) 100vw, 900px">
                        <img src="<?php the_images_dir( $vars['slug'] . '/' . $vars['slug'] . '-main.jpg'); ?>" loading="lazy" decoding="async" alt="Embracing a simpler life screenshot of home page">
                    </picture>
                </figure>
            </div>
        </div>
    </article>
</main>

<?php include '_includes/footer.php'; ?>
