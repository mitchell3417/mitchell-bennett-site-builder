<?php
	
	$url = 'https://mitchellbennett.rocks/';
	$pages = get_all_files_from_directory("_pages", "html");
	
	$xml = new SimpleXMLElement( '<urlset/>' );
	$xml->addAttribute( 'xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9' );
	
	foreach ( $pages as $page ) {
		
		if ( $page == '_pages/sitemap.html' || $page == '_pages/robots.html' ) {
			continue;
		}
		
		preg_match('/mbennett-site-map: ({[^{}]*})/', file_get_contents( $page ), $matches);
		if ( isset( $matches[1] ) ) {
			$site_map = json_decode( $matches[1] );
		} else {
			$site_map = new stdClass();
		}
		
		$page = str_replace("_pages/", "", $page);
		$page = str_replace(".html", "", $page);
		
		if ( $page == "index" ) $page = "";
		
		$url_xml = $xml->addChild( 'url' );
		$url_xml->addChild( 'loc', $url . $page );
		if ( isset( $site_map->lastmod ) ) $url_xml->addChild( 'lastmod', $site_map->lastmod );
		if ( isset( $site_map->changefreq ) ) $url_xml->addChild( 'changefreq', $site_map->changefreq );
		if ( isset( $site_map->priority ) ) $url_xml->addChild( 'priority', $site_map->priority );
	}
	
	$dom = new DOMDocument('1.0', 'utf-8');
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($xml->asXML());
	
	
	echo $dom->saveXML();