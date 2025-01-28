<?php include '_includes/head.php'; ?>
<body>
    <header id="masthead" class="full-width">
        <div id="site-header-menu" class="container header--container flex flex--middle flex--between">
            <div class="site-logo-wrapper">
                <a href="<?php the_path( '/' ); ?>" aria-label="Navigate to the Home page">
                    <img src="<?php the_assets_dir('/images/logo-horizontal.svg' ); ?>" alt="Home page button of Mitchell Bennett Web Development, serving Lake of the Ozarks logo"/>
                </a>
            </div>
            <div id="menu-toggle" class="nav--icon--mobile" aria-controls="site-navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="site-navigation" role="navigation" class="header__nav" aria-label="Main">
                <ul id="menu-home-page" class="menu">
                    <!-- <li class="menu-item"><a href="<?php the_path( '/about/' ); ?>">About</a></li> -->
                    <li class="menu-item"><a href="<?php the_path( '/projects/' ); ?>">Projects</a></li>
                    <!-- <li class="menu-item"><a href="<?php the_path( '/blog/' ); ?>">Blog</a></li> -->
                    <li class="cta menu-item"><a href="#contact">Get Started</a></li>
                </ul>
            </nav>
        </div>
        <div class="search">
            <form action="https://www.google.com/search" method="get">
                <input type="hidden" name="q" value="site:mitchellbennett.rocks">
                <input type="text" name="q" placeholder="Search">
                <input type="submit" value="Search">
            </form>
        </div>
    </header>
    <div class="position--relative has-white-background-color">
