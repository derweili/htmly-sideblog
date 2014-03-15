<div class="social">
				<h3>Follow</h3>
				<?php if(!empty($twitterurl)) { ?>
				<a class="" target="_blank" href="<?php echo $twitterurl;?>">
					<i class="fa fa-twitter-square"></i>
				</a>
				<?php }; ?>
				<?php if(!empty($facebookurl)) { ?>
				<a target="_blank" href="<?php echo $facebookurl?>">
					<i class="fa fa-facebook-square"></i>
				</a>
				<?php }; ?>
				<?php if(!empty($googleurl)) { ?>
				<a class="" target="_blank" href="<?php echo $googleurl;?>">
					<i class="fa fa-google-plus-square"></i>
				</a>
				<?php }; ?>
				<?php if(!empty($tumblrurl)) { ?>
				<a target="_blank" href="<?php echo $tumblrurl?>">
					<i class="fa fa-tumblr-square"></i>
				</a>
				<?php }; ?>
				<a target="_blank" href="<?php echo site_url() ?>feed/rss">
					<i class="fa fa-rss-square"></i>
				</a>
</div>