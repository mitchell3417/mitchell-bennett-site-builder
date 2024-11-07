<body>
    <header id="masthead" class="full-width">
        <div id="site-header-menu" class="container header--container flex flex--middle flex--between">
            <div class="site-logo-wrapper">
                <a href="<?php the_path( '/' ); ?>"><img src="<?php the_assets_dir('/images/logo-horizontal.svg' ); ?>" /></a>
            </div>
            <div id="menu-toggle" class="nav--icon--mobile">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="site-navigation" role="navigation" class="header__nav">
                <ul id="menu-home-page" class="menu">
                    <!-- <li class="menu-item"><a href="<?php the_path( '/about' ); ?>">About</a></li> -->
                    <li class="menu-item"><a href="<?php the_path( '/projects' ); ?>">Portfolio</a></li>
                    <!-- <li class="menu-item"><a href="<?php the_path( '/blog' ); ?>">Blog</a></li> -->
                    <li class="cta menu-item"><a href="#contact">Get Started</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="position--relative has-white-background-color">
