<div class="social">
				<h3>Follow</h3>
				<?php if(!empty($twitterurl)) { ?>
				<a class="" target="_blank" href="<?php echo $twitterurl;?>">
					<img width="20" height="20" alt="Twitter" src="<?php echo site_url() ?>themes/sideblog/img/twitter.png">
				</a>
				<?php }; ?>
				<?php if(!empty($facebookurl)) { ?>
				<a target="_blank" href="<?php echo $facebookurl?>">
					<img width="20" height="20" alt="Facebook" src="<?php echo site_url() ?>themes/sideblog/img/facebook.png">
				</a>
				<?php }; ?>
				<?php if(!empty($googleurl)) { ?>
				<a class="" target="_blank" href="<?php echo $googleurl;?>">
					<img width="20" height="20" alt="Google" src="<?php echo site_url() ?>themes/sideblog/img/google.png">
				</a>
				<?php }; ?>
				<?php if(!empty($tumblrurl)) { ?>
				<a target="_blank" href="<?php echo $tumblrurl?>">
					<img width="20" height="20" alt="Tumblr" src="<?php echo site_url() ?>themes/sideblog/img/tumblr.png">
				</a>
				<?php }; ?>
				<a target="_blank" href="<?php echo site_url() ?>feed/rss">
					<img width="20" height="20" alt="RSS Feed" src="<?php echo site_url() ?>themes/sideblog/img/rss.png">
				</a>
</div>