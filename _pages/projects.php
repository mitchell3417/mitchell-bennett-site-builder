<?php
/*
 * mbennett-site-map: {"lastmod": "2024-11-08","priority": 0.9}
 */
?>

<?php
	// Get the slugs of all the projects
	$paths = get_all_files_from_directory('_data/project', 'php');
	$projects = array();
	
	foreach ($paths as $path) {
		
		include $path;
		
		$projects[] = $data;
		
	}
?>


<main>
	<?php foreach ( $projects as $project ) : ?>
        <article class="full-width has-brand-color-<?php echo $project['background']; ?>-background-color has-white-color section--work-sample padding-bottom--xxl padding-top--xxl page-projects">
            <div class="container margin-bottom--xxl">
                <div class="flex flex--middle">
                    <header class="col col--12 col__sm--9">
                        <a href="<?php the_path( '/project/' . $project['slug'] ); ?>" class="has-white-color" title="<?php echo $project['name']; ?>">
                            <h2 class="text--uppercase letter-spacing--2 font--normal margin-top--none margin-bottom--none"><?php echo $project['name']; ?></h2>
                        </a>
                    </header>
                    <div class="col col--12 col__sm--3 button-container">
                        <div>
                            <?php if ( isset($project['url'] ) ) : ?>
                                <a href="<?php echo $project['url']; ?>" class="btn btn--outline btn--small" target="_blank">Visit Website</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col col--12">
                        <p class="margin-top--none sans"><small><?php
									$count = count($project['tags']);
									foreach( $project['tags'] as $key=>$tag ) {
										if ($count - 1 != $key) {
											echo $tag . ' | ';
										} else {
											echo $tag;
										}
									}
								?></small></p>
						<?php echo $project['excerpt']; ?>
                    </div>
                    <div class="col col--12 site-images-container">
                        <div class="site-images">
                            <a href="<?php the_path( '/project/' . $project['slug'] ); ?>"><img src="<?php the_images_dir( $project['slug'] . '/' . $project['slug'] . '-alt.jpg'); ?>" alt="<?php echo $project['name']; ?> screenshot of blog page" class="site-image alt-image"></a>
                            <a href="<?php the_path( '/project/' . $project['slug'] ); ?>"><img src="<?php the_images_dir( $project['slug'] . '/' . $project['slug'] . '-main.jpg'); ?>" srcset="<?php the_images_dir( $project['slug'] . '/' . $project['slug'] . '-main-300x225.jpg 300w'); ?>, <?php the_images_dir( $project['slug'] . '/' . $project['slug'] . '-main-768x576.jpg 768w'); ?>, <?php the_images_dir( $project['slug'] . '/' . $project['slug'] . '-main-1024x768.jpg 1024w'); ?>, <?php the_images_dir( $project['slug'] . '/' . $project['slug'] . '-main.jpg'); ?> 1200w" sizes="(max-width: 350px) 300px, (max-width: 800px) 768px, 1200px" alt="<?php echo $project['name']; ?> screenshot of home page" class="site-image main-image"></a>
                            <a href="<?php the_path( '/project/' . $project['slug'] ); ?>"><img src="<?php the_images_dir( $project['slug'] . '/' . $project['slug'] . '-mobile.jpg'); ?>" alt="<?php echo $project['name']; ?> screenshot of mobile page" class="site-image mobile-image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
	<?php endforeach; ?>
</main>