<?php include '_includes/head.php'; ?>

<?php include '_includes/header.php'; ?>

    <section class="full-width has-brand-color-1-background-color section--purpose">
        <div class="code" aria-hidden="true">
            <div class="flex">
				<?php include '_includes/home/code.php'; ?>
            </div>
        </div>
        <div class="container">
            <main class="">
                <h1 class="size--h2">I help companies and designers make outstanding websites a reality.</h1>
                <p>Mitchell Bennett is a front and back-end web developer who works with companies of all sizes to build websites.</p>
                <a href="#contact">Let's Start<span>a new project together</span></a>
            </main>
        </div>
    </section>
    <section class="full-width section--showcase">
        <div class="container flex">
            <div class="showcase col col--12 col__md--4">
                <div class="showcase__icon">
					<?php include '_includes/icons/website.php'; ?>
                </div>
                <h6 class="text--uppercase font-size--10">Get a beautiful, modern website</h6>
            </div>
            <div class="showcase col col--12 col__md--4">
                <div class="showcase__icon">
					<?php include '_includes/icons/calendar.php'; ?>
                </div>
                <h6 class="text--uppercase font-size--10">Launch your project on time</h6>
            </div>
            <div class="showcase col col--12 col__md--4">
                <div class="showcase__icon">
					<?php include '_includes/icons/brain.php'; ?>
                </div>
                <h6 class="text--uppercase font-size--10">Know it's intuitive to use</h6>
            </div>
        </div>
    </section>
    <section class="full-width has-white-background-color section--message padding-top--xxl padding-bottom--xxl">
        <div class="container">
            <h2 class="text--center size--h3">Get your website built by Mitchell Bennett.<br>Know it's done well.</h2>
            <p class="text--center">Mitchell is going to build a website that not only looks like the design and functions well but he's going to do it on time and on budget. As a former teacher he has the skills to make complex web development jargon make sense to people of all skill levels. You have a great idea, let Mitchell help you bring it to life.</p>
            <div class="flex margin-top--xl">
                <div class="checkmark col--12 col__md--6">
                    Up-to-date, efficient code
                </div>
                <div class="checkmark col--12 col__md--6">
                    Great client interaction and follow through
                </div>
            </div>
            <div class="flex">
                <div class="checkmark col--12 col__md--6">
                    Clear communcation
                </div>
                <div class="checkmark col--12 col__md--6">
                    Start a long term, rewarding relationship
                </div>
            </div>
            <div class="flex flex--center margin-bottom--xxl margin-top--lg">
                <a href="#contact" class="btn btn--cta">Get Started</a>
            </div>
        </div>
    </section>
    <section class="full-width has-brand-color-5-background-color bg--tilt section--quote">
        <div class="quote">
            <div class="content">
                <div class="flex--middle flex--center">
                    <div class="image flex flex--middle flex--center">
						<?php include '_includes/icons/quote.php'; ?>
                    </div>
                    <div class="text">
                        <blockquote>
                            <p>"Mitchell is fantastic. He delivers what he promises and does so on time and on budget."</p>
                            <footer>Mary Zimmer<cite>A Great Baby</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <article class="full-width has-brand-color-4-background-color  bg--tilt has-white-color section--work-sample padding-bottom--xxl">
        <div class="container">
            <div class="flex">
                <div class="col col--12 col__md--3">
                    <h3 class="font--normal size--h4"><a href="<?php the_path( '/projects/embracing-a-simpler-life' ); ?>" class="has-white-color" title="Embracing a Simpler Life">Embracing a Simpler Life</a></h3>
                    <p><small style="text-transform: lowercase;">Custom Theme | Mobile Responsive | Wordpress</small></p>
                    <div class="margin-top--xl">
                        <a href="<?php the_path( '/projects/embracing-a-simpler-life' ); ?>" class="btn btn--outline">View Project</a>
                    </div>
                </div>
                <div class="col col--12 col__md--9">
                    <div class="site-images">
                        <a href="<?php the_path( 'projects/embracing-a-simpler-life' ); ?>"><img src="<?php the_assets_dir( '/images/embracing-a-simpler-life/embracing-a-simpler-life-alt.jpg' ); ?>" alt="Embracing a simpler life screenshot of blog page" class="site-image alt-image"></a>
                        <a href="<?php the_path( 'projects/embracing-a-simpler-life' ); ?>"><img src="<?php the_assets_dir( '/images/embracing-a-simpler-life/embracing-a-simpler-life-main-1024x768.jpg' ); ?>" srcset="<?php the_assets_dir( '/images/embracing-a-simpler-life/embracing-a-simpler-life-main-300x225.jpg' ); ?> 225w, <?php the_assets_dir( '/images/embracing-a-simpler-life/embracing-a-simpler-life-main-768x576.jpg' ); ?> 576w, <?php the_assets_dir( '/images/embracing-a-simpler-life/embracing-a-simpler-life-main-1024x768.jpg' ); ?> ?> 768w" sizes="(max-width: 350px) 225px, (max-width: 1500px) 576px, 768px" alt="Embracing a simpler life screenshot of home page" class="site-image main-image"></a>
                        <a href="<?php the_path( 'projects/embracing-a-simpler-life' ); ?>"><img src="<?php the_assets_dir( '/images/embracing-a-simpler-life/embracing-a-simpler-life-mobile.jpg' ); ?>" alt="Embracing a simpler life screenshot of mobile page" class="site-image mobile-image"></a>
                    </div>
                </div>
                <div class="col col--12">
                    <p class="text--center sans font-size--12 margin-top--xxl margin-bottom--none"><a href="<?php the_path( '/projects' ); ?>" class="has-white-color">View entire portfolio →</a></p>
                </div>
            </div>
        </div>
    </article>

<?php include '_includes/footer.php'; ?>