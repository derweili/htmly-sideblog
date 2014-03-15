<!DOCTYPE html>
<html lang="">
<head>
	<?php echo $head_contents ?>
    <meta charset="utf-8">
    <?php
	    /* Social profiles*/
	    $twitterurl = config('social.twitter');
	    $facebookurl = config('social.facebook');
	    $googleurl = config('social.google');
	    $tumblrurl = config('social.tumblr');

	    include("themes/sideblog/include/seo.php");
	    include("themes/sideblog/include/fonts.php");
	?>
    <title>404 - <?php echo blog_title() ?></title>
    <?php if (publisher()):?><link href="<?php echo publisher() ?>" rel="publisher" /><?php endif;?>
    <link rel="stylesheet" href="<?php echo site_url() ?>themes/sideblog/css/style.min.css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <meta content="<?php echo blog_title() ?>" itemprop="name"/>
    <script src="<?php echo site_url(); ?>/themes/sideblog/js/pageload.min.js" type="text/javascript"></script>
    <?php 
    include("themes/sideblog/include/background.php");
    include("themes/sideblog/include/fonts.php"); 
	?>

</head>

<body class="site-404">
    <div class="wrapper">
        <nav id="menu" class="responsive">
	    	<?php echo menu() ?><h4 class="sitename"><?php echo config('blog.title')?></h4>
	    </nav>
        <div class="content">
            <div class="post first" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                <div class="main">
                    <h1 class="title-index" itemprop="name">This page doesn't exist!</a></h1>
                    <div class="search">
                        <?php echo search() ?>
                    </div>
                </div>
           </div>
		
		<div class="footerbar">
		    <?php include("themes/sideblog/include/socialbar.php"); ?>
			<div class="archive">
					<?php echo archive_list()?>
			</div>
			<?php 
			$speedreading = config('my.speedreading');
			if($speedreading == "enabled"){ ?>
			<div class="speedreading">
				<a class="bookmarklet" href="javascript:(function(){%20cb%20=%20function(){%20create_spritz();};%20var%20script=document.createElement('SCRIPT');script.src='https://miserlou.github.io/OpenSpritz/spritz.js?callback=cb?callback=cb';%20script.onload=cb;%20document.body.appendChild(script);})();"><h3>Read with Spriz</h3></a>
				<?php }; ?>
			</div>
	    </div>

        
        
        
        
        </div>
    
    </div>
</body>
</html>
