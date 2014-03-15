<?php if (!empty($breadcrumb)):?><div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><?php echo $breadcrumb ?></div><?php endif;?>
<div class="profile-wrapper" itemprop="accountablePerson" itemscope="itemscope">
	<div class="profile" itemtype="http://schema.org/Person" itemscope="itemscope" itemprop="Person">
		<h1 class="title-post" itemprop="name"><?php echo $name ?></h1>
		<div class="bio" itemprop="description"><?php echo $bio ?></div>
	</div>
</div>

<h2 class="post-index">Posts by this author:</h2>
<?php if(!empty($posts)) {?>
<ul class="post-list">
	<?php $i = 0; $len = count($posts);?>
		<?php foreach($posts as $p):?>
		<?php
			if ($i == 0) {
				$class = 'post first';
				}
				elseif ($i == $len - 1) {
					$class = 'post last';
				}
				else {
					$class = 'post';
				}
				$i++;
    ?>
    <div class="<?php echo $class ?>" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
    	<div class="main">
			<h2 class="title-index" itemprop="name"><a href="<?php echo $p->url?>"><?php echo $p->title ?></a></h2>
			<div class="metabar">
				<span itemprop="datePublished"><?php echo date('d F Y', $p->date)?></span> - Posted in
				<span itemprop="articleSection"><?php echo $p->tag ?></span> by
				<span itemprop="author"><a href="<?php echo $p->authorurl ?>"><?php echo $p->author ?></a></span>
				<?php
					if (disqus_count()) {?> - <span><a href="<?php echo $p->url?>#disqus_thread">Comments</a></span>
					<?php } elseif (facebook()){ ?> -
					<a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> Comments</span></a>
					<?php } ?>
			</div>
			<div class="teaser-body" itemprop="articleBody">
				<?php echo get_thumbnail($p->body)?>
				<?php echo get_teaser($p->body, $p->url)?>
			</div>
    </div>
   
    <?php endforeach;?>

</ul>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])):?>
	<div class="pager">
		<?php if (!empty($pagination['prev'])):?>
			<span><a href="?page=<?php echo $page-1?>" class="pagination-arrow newer" rel="prev">Newer</a></span>
		<?php endif;?>
		<?php if (!empty($pagination['next'])):?>
			<span><a href="?page=<?php echo $page+1?>" class="pagination-arrow older" rel="next">Older</a></span>
		<?php endif;?>
	</div>
<?php endif;?>
<?php } else { echo 'Keine Beiträge gefunden!'; }?>