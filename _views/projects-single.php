<?php include '_includes/head.php'; ?>

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
                        <div>
                            <a href="<?php echo $vars['url']; ?>" class="btn btn--outline btn--small" target="_blank">Visit Website</a>
                        </div>
                    </div>
                    <div class="col col--12">
                        <p class="margin-top--none sans opacity--50"><small><?php
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
                            <img src="<?php images_dir( $vars['slug'] . '/' . $vars['slug'] . '-alt.jpg'); ?>" alt="Embracing a simpler life screenshot of blog page" class="site-image alt-image">
                            <img src="<?php images_dir( $vars['slug'] . '/' . $vars['slug'] . '-main.jpg'); ?>" alt="Embracing a simpler life screenshot of home page" class="site-image main-image">
                            <img src="<?php images_dir( $vars['slug'] . '/' . $vars['slug'] . '-mobile.jpg'); ?>" alt="Embracing a simpler life screenshot of mobile site" class="site-image mobile-image">
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="full-width padding-top--lg padding-bottom--xxl">
            <div class="container content margin-top--xxl margin-bottom--xxl">
                <?php echo $vars['description']; ?>
                <figure class="wp-block-image size-large">
                    <img src="<?php images_dir( $vars['slug'] . '/' . $vars['slug'] . '-main.jpg'); ?>" alt="Embracing a simpler life screenshot of home page">
                </figure>
            </div>
        </div>
    </article>
</main>

<?php include '_includes/footer.php'; ?>
