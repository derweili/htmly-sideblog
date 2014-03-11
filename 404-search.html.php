<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>Suche - <?php echo blog_title() ?></title>
    <link rel="stylesheet" href="<?php echo site_url() ?>themes/sideblog/css/style.css" />
    <link href='<?php echo site_url() ?>favicon.ico' rel='icon' type='image/x-icon'/>
</head>

<body>
    <div class="wrapper">
        <nav id="menu" class="responsive">
            <ul class="nav">
                <li class="item first active"><a href="http://www.htmly.com/">Home</a></li>
                <li class="item"><a href="http://www.htmly.com/demo">Demo</a></li>
                <li class="item"><a href="http://www.htmly.com/download">Download</a></li>
                <li class="item"><a target="_blank" href="https://github.com/danpros/htmly/blob/master/README.md">Doc</a></li>
                <li class="item last"><a target="_blank" href="https://github.com/danpros/htmly/issues">Forum</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="post first" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                <div class="main">
                    <h2 class="title-index" itemprop="name">Kein Ergebnis zur deiner Suche gefunden!</a></h2>
                    <div class="search">
                        <?php echo search() ?>
                    </div>
                </div>
           </div>

        
        
        
        
        </div>
    
    </div>
</body>
</html>
