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
    
    ?>
    <title>Suche - <?php echo blog_title() ?></title>
    <?php if (publisher()):?><link href="<?php echo publisher() ?>" rel="publisher" /><?php endif;?>
    <link rel="stylesheet" href="<?php echo site_url() ?>themes/sideblog/css/style.css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <meta content="<?php echo blog_title() ?>" itemprop="name"/>
    <meta content="<?php echo blog_description() ?>" itemprop="description"/>

</head>

<body class="<?php echo $bodyclass; ?>" itemscope="itemscope" itemtype="http://schema.org/Blog">

    <div class="wrapper">
	    <nav id="menu" class="responsive">
	    	<?php echo menu() ?>
	    </nav>
	    <div class="content">
	            <?php echo content()?>
	    </div>
	    <div class="footerbar">
		    <?php include("themes/sideblog/include/socialbar.php"); ?>
			<div class="archive">
					<?php echo archive_list()?>
			</div>
			<div>
				
			</div>
	    </div>
		
    </div>
	    

    
</body>
</html>

