<?php

	$bgimage = config('my.bgimage');
	if(empty($bgimage)){
		$bgimage = "http://www.julian-weiland.de/htmly/themes/sideblog/img/hintergrund-2.jpg";
	};
?>
<style>
	@media screen and (min-device-width: 651px){
		body{ background-image:url(<?php echo $bgimage;?>)}
	}
</style>