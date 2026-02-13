<?php
    global $env;
    $title = ( isset( $vars['seo_title'] ) ) ? $vars['seo_title'] : 'Mitchell Bennett Web Development';
    $desc = ( isset( $vars['seo_desc'] ) ) ? $vars['seo_desc'] : 'Mitchell Bennett a web developer and designer builds custom business and portfolio websites at the Lake of the Ozarks, Missouri.';
    if ( isset( $vars['path'] ) ) {
        $path = $vars['path'];
		if ( substr( $path, 0, 1 ) !== '/' ) {
			$path = '/' . $path;
		}
		$path = preg_replace('/^\/site/', '', $path);
        $path = preg_replace('/\.html$/', '', $path);
    } else {
        $path = '';
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php if ( $env === 'production') : ?><base href="https://mitchellbennett.rocks"><?php endif; ?>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <!-- SEO Optimization-->
        <title><?php echo $title; ?></title>
        <?php if ( isset( $vars['noindex'] ) ) : ?>
        <meta name="robots" content="noindex">
        <?php else : ?>
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
        <?php endif; ?>
        <meta name="description" content="<?php echo $desc; ?>">
		<?php if ( $env === 'production') : ?><link rel="canonical" href="https://mitchellbennett.rocks<?php echo $path; ?>"><?php endif; ?>
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:description" content="<?php echo $desc; ?>">
        <meta property="og:url" content="https://mitchellbennett.rocks<?php echo $path; ?>">
        <meta property="og:site_name" content="<?php echo $title; ?>">
        <meta property="og:updated_time" content="<?php echo date('Y-m-d\TH:i:s\Z'); ?>">
        <meta property="og:image" content="<?php the_assets_dir( '/images/mitch-headshot-400x400' ); ?>">
        <meta property="og:image:secure_url" content="<?php the_assets_dir( '/images/mitch-headshot-400x400' ); ?>">
        <meta property="og:image:width" content="400">
        <meta property="og:image:height" content="400">
        <meta property="og:image:alt" content="Mitchell Bennett serving Lake Ozark, Missouri">
        <meta property="og:image:type" content="image/jpeg">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo $title; ?>">
        <meta name="twitter:description" content="<?php echo $desc; ?>">
        <meta name="twitter:image" content="<?php the_assets_dir( '/images/mitch-headshot-400x400' ); ?>">
        <meta name="twitter:label1" content="Written by">
        <meta name="twitter:data1" content="Mitchell Bennett">
        <meta name="twitter:label2" content="Time to read">
        <meta name="twitter:data2" content="Less than a minute">
        <script type="application/ld+json" class="rank-math-schema-pro">{"@context":"https://schema.org","@graph":[{"@type":"Place","@id":"https://thebennettsphoto.com/#place","address":{"@type":"PostalAddress","addressLocality":"St. Louis","addressRegion":"Missouri","addressCountry":"United States"}},{"@type":["LocalBusiness","Organization"],"@id":"https://thebennettsphoto.com/#organization","name":"The Bennetts","url":"https://thebennettsphoto.com","sameAs":["https://www.facebook.com/mitchellbennettphotography","https://twitter.com/https://twitter.com/thebennettsphto","https://www.instagram.com/thebennettsphto","https://www.youtube.com/@mitchellbennettfilms"],"email":"hello@thebennettsphoto.com","address":{"@type":"PostalAddress","addressLocality":"St. Louis","addressRegion":"Missouri","addressCountry":"United States"},"logo":{"@type":"ImageObject","@id":"https://thebennettsphoto.com/#logo","url":"https://thebennettsphoto.com/wp-content/uploads/2024/03/cropped-The-Bennetts-Lettermark.jpg","contentUrl":"https://thebennettsphoto.com/wp-content/uploads/2024/03/cropped-The-Bennetts-Lettermark.jpg","caption":"The Bennetts - Wedding Photographers","inLanguage":"en-US","width":"512","height":"512"},"priceRange":"$$$","openingHours":["Monday,Tuesday,Wednesday,Thursday,Friday,Saturday 09:00-21:00","Sunday 12:00-21:00"],"description":"Mitchell &amp; Katie Bennett, the names behind The Bennetts, are wedding photographers serving the St. Louis and Missouri markets with meaningful, joyful photography.","foundingDate":"08/14/2011","legalName":"Mitchell Bennett LLC","location":{"@id":"https://thebennettsphoto.com/#place"},"image":{"@id":"https://thebennettsphoto.com/#logo"},"telephone":"+1-573-480-4610"},{"@type":"WebSite","@id":"https://thebennettsphoto.com/#website","url":"https://thebennettsphoto.com","name":"The Bennetts - Wedding Photographers","alternateName":"The Bennetts","publisher":{"@id":"https://thebennettsphoto.com/#organization"},"inLanguage":"en-US","potentialAction":{"@type":"SearchAction","target":"https://thebennettsphoto.com/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"ImageObject","@id":"https://thebennettsphoto.com/wp-content/uploads/2024/04/The-Bennetts-74-1.jpg","url":"https://thebennettsphoto.com/wp-content/uploads/2024/04/The-Bennetts-74-1.jpg","width":"2500","height":"1667","inLanguage":"en-US"},{"@type":"WebPage","@id":"https://thebennettsphoto.com/#webpage","url":"https://thebennettsphoto.com/","name":"The Bennetts\u2014St. Louis Fine Art Wedding Photographer","datePublished":"2021-10-05T13:51:08-05:00","dateModified":"2024-11-09T09:57:06-06:00","about":{"@id":"https://thebennettsphoto.com/#organization"},"isPartOf":{"@id":"https://thebennettsphoto.com/#website"},"primaryImageOfPage":{"@id":"https://thebennettsphoto.com/wp-content/uploads/2024/04/The-Bennetts-74-1.jpg"},"inLanguage":"en-US"},{"@type":"Person","@id":"https://thebennettsphoto.com/#author","name":"Mitchell Bennett","image":{"@type":"ImageObject","@id":"https://secure.gravatar.com/avatar/519b8170e4edb6d1adc84c389e6db14d?s=96&amp;d=mm&amp;r=g","url":"https://secure.gravatar.com/avatar/519b8170e4edb6d1adc84c389e6db14d?s=96&amp;d=mm&amp;r=g","caption":"Mitchell Bennett","inLanguage":"en-US"},"worksFor":{"@id":"https://thebennettsphoto.com/#organization"}},{"@type":"Article","headline":"The Bennetts\u2014St. Louis Fine Art Wedding Photographer","keywords":"St. Louis,Wedding,Photographer","datePublished":"2021-10-05T13:51:08-05:00","dateModified":"2024-11-09T09:57:06-06:00","author":{"@id":"https://thebennettsphoto.com/#author","name":"Mitchell Bennett"},"publisher":{"@id":"https://thebennettsphoto.com/#organization"},"description":"The Bennetts, a husband and wife St. Louis (STL) photography team providing fine art wedding images to Missouri, the Midwest, and worldwide.","name":"The Bennetts\u2014St. Louis Fine Art Wedding Photographer","@id":"https://thebennettsphoto.com/#richSnippet","isPartOf":{"@id":"https://thebennettsphoto.com/#webpage"},"image":{"@id":"https://thebennettsphoto.com/wp-content/uploads/2024/04/The-Bennetts-74-1.jpg"},"inLanguage":"en-US","mainEntityOfPage":{"@id":"https://thebennettsphoto.com/#webpage"}}]}</script>
        <!-- Favicons -->
        <link rel="stylesheet" href="<?php the_versioned_assets_dir( '/css/style.css' ); ?>" type="text/css" media="all">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php the_fav_dir('apple-icon-57x57.png'); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php the_fav_dir('apple-icon-60x60.png'); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php the_fav_dir('apple-icon-72x72.png'); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php the_fav_dir('apple-icon-76x76.png'); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php the_fav_dir('apple-icon-114x114.png'); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php the_fav_dir('apple-icon-120x120.png'); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php the_fav_dir('apple-icon-144x144.png'); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php the_fav_dir('apple-icon-152x152.png'); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php the_fav_dir('apple-icon-180x180.png'); ?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php the_fav_dir('android-icon-192x192.png'); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php the_fav_dir('favicon-32x32.png'); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php the_fav_dir('favicon-96x96.png'); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php the_fav_dir('favicon-16x16.png'); ?>">
        <link rel="manifest" href="<?php the_fav_dir('manifest.json'); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php the_fav_dir('ms-icon-144x144.png'); ?>">
        <meta name="theme-color" content="#ffffff">
    </head>
