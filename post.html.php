    <?php if (!empty($breadcrumb)):?><div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><?php echo $breadcrumb ?></div><?php endif;?>
    <?php if(login()) { echo tab($p);} ?>
    <div class="post" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
    	<div class="main">
			<h1 class="title-post" itemprop="name"><?php echo $p->title ?></h1> <!-- Post Titel Ausgeben -->
			<div class="metabar">
				<span itemprop="datePublished"><a href="<?php echo $p->archive ?>" title="Show all posts made on this day"><?php echo date('d F Y', $p->date)?></a></span> <!-- Datum und Uhrzeit -->
				- Veröffentlicht in <span itemprop="articleSection"><?php echo $p->tag ?></span> <!-- Tags -->
				by <span itemprop="author"><a href="<?php echo $p->authorurl ?>"><?php echo $p->author ?></a></span> - <!-- Autor -->
				<span><a href="<?php echo $p->url ?>" rel="permalink">Permalink</a></span> <!-- Permalink -->
    		</div>
			<div class="post-body" itemprop="articleBody">
				<?php echo $p->body; ?>
			</div>
		</div>
		<div class="separator">→</div>
		<div class="share-box">
			<?php echo $authorinfo ?>
				<div class="share">
					<h4>Share this post</h4>
					<a class="twitter"  href="https://twitter.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title?>"><i class="fa fa-twitter-square"></i>Twitter</a>
					<a class="facebook"  href="https://www.facebook.com/sharer.php?u=<?php echo $p->url ?>&t=<?php echo $p->title?>"><i class="fa fa-facebook-square"></i>Facebook</a>
					<a class="googleplus"  href="https://plus.google.com/share?url=<?php echo $p->url ?>"><i class="fa fa-google-plus-square"></i>Google+</a>
				</div>
		</div>
		<div class="postnav"> <!-- Nächste Beiträge -->
			<?php if (!empty($next)):?>
				<span><a href="<?php echo ($next['url']);?>" class="pagination-arrow newer" rel="next"><?php echo ($next['title']);?></a></span>
			<?php endif;?>
			<?php if (!empty($prev)):?>
				<span><a href="<?php echo ($prev['url']); ?>" class="pagination-arrow older" rel="prev"><?php echo ($prev['title']); ?></a></span>
			<?php endif;?>
		</div>
		<?php echo get_related($p->tag)?>
		<div id="comments" class="comments border">
			<?php if (facebook()):?>
			<div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
			<?php endif;?>
			<?php if (disqus()):?>
				<div id="disqus_thread"></div>
			<?php endif;?>
		</div>

    <?php if (disqus()):?>
   		 <?php echo disqus($p->title, $p->url) ?>
    <?php endif;?>
    </div>