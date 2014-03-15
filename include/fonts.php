<?php 
	$headlinesrc = config('my.headlinesrc'); 
	$headlinefont = config('my.headlinefont'); 
	$headlineweight = config('my.headlineweight'); 
	$headlinestyle = config('my.headlinestyle');
	
	$copysrc = config('my.copysrc');
	$copyfont = config('my.copyfont');
	$copyweight = config('my.copyweight');
	$copystyle = config('my.copystyle');
	if (empty($headlinesrc)){
		echo "<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>";
	}
	else{
		echo $headlinesrc;
	}
	if (empty($copysrc)){
		echo "<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' type='text/css'>";
	}
	else{
		echo $copysrc;
	};
?>

<style>
body{
	<?php
		if(!empty($copyfont)){
			echo "font-family:".$copyfont."; ";
		};
		if(!empty($copyweight)){
			echo "font-weight:".$copyweight."; ";
		};
		if(!empty($copystyle)){
			echo "font-style:".$copystyle."; ";
		};
	?>
}
h1, h2,h3, h4, h5{
	<?php
		if(!empty($headlinefont)){
			echo "font-family:".$headlinefont."; ";
		};
		if(!empty($headlineweight)){
			echo "font-weight:".$headlineweight."; ";
		};
		if(!empty($headlinestyle)){
			echo "font-style:".$headlinestyle."; ";
		};
	?>
}

</style>