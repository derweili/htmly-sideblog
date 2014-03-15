<?php
$author = config('seo.author');
	if(!empty($author)){
		echo '<link href="'.$author.'" rel="author">';
	};
$oglocale = config('seo.location');
	if(!empty($oglocale)){
		echo '<meta content="'.$oglocale.'" property="og:locale">';
	};
$ogtitle = blog_title();
	if(!empty($ogtitle)){
		echo '<meta content="'.$ogtitle.'" property="og:title">';
	};
$ogtype = config('seo.ogtype');
	if(!empty($ogtype)){
		echo '<meta content="'.$ogtype.'" property="og:type">';
	};
$ogurl = $p->url;
	if(!empty($ogurl)){
		echo '<meta content="'.$ogurl.'" property="og:url">';
	};
$ogsitename = config('blog.title');
	if(!empty($ogsitename)){
		echo '<meta content="'.$ogsitename.'" property="og:site_name">';
	};
$articleauthor = $p->author;
	if(!empty($articleauthor)){
		echo '<meta content="'.$articleauthor.'" property="article:author">';
	};
$ogsitename = config('seo.location');
	if(!empty($ogsitename)){
		echo '<meta content="'.$ogsitename.'" property="og:site_name">';
	};
$publishedtime = date('d F Y', $p->date);
	if(!empty($publishedtime)){
		echo '<meta content="'.$publishedtime.'" property="article:published_time">';
	};
$ogimagestandard = config('seo.ogimg');
$ogimage = get_thumbnail($p->body);
	if(!empty($ogimagestandard)){
		echo '<meta content="'.$ogimage.'" property="og:image">';
	}
	elseif(empty($ogimage) and !empty($ogimagestandard)){
		echo '<meta content="'.$ogimagestandard.'" property="og:image">';
	};
	
$ogtitle = $p->title;
	if(!empty($ogimagestandard)){
		echo '<meta content="'.$ogtitle.'" property="og:site_name">';
	};


$rsslink = site_url().'feed/rss';
echo '<link href="'.$rsslink.'" title="'.$ogsitename.' » Feed" type="application/rss+xml" rel="alternate">';
    
$blogdescription = blog_description();    
echo '<meta content="'.$blogdescription.'" itemprop="description"/>';


/* Apple touch images */
$ati = config('seo.ati');
	if(!empty($ati)){
		echo '<link rel="apple-touch-icon" href="'.$ati.'">';
	};
$ati76 = config('seo.ati76');
	if(!empty($ati76)){
		echo '<link sizes="76x76" rel="apple-touch-icon" href="'.$ati76.'">';
	};
$ati120 = config('seo.ati120');
	if(!empty($ati120)){
		echo '<link rel="apple-touch-icon" href="'.$ati120.'">';
	};
$ati152 = config('seo.ati152');
	if(!empty($ati152)){
		echo '<link rel="apple-touch-icon" href="'.$ati152.'">';
	};
	
/* Apple Startup Image */
$asi = config('seo.asi');
	if(!empty($asi)){
		echo '<link rel="apple-touch-icon" href="'.$asi.'">';
	};


	?>

<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
