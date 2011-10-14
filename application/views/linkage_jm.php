<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url()?>asset/webkit.css" />

jquery mobile
<link rel="stylesheet" href="<?=base_url()?>asset/jquery.mobile-1.0rc1.min.css" />
<script type="text/javascript" src="<?=base_url()?>asset/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>asset/jquery.mobile-1.0rc1.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>asset/custom-scripting.js"></script>


<title>3 linkage</title>
</head>
<body>
<div data-role="page" id="foo" data-title="Three Linkage" >	
	<div class="ui-grid-b">
		<div id="box-left" class="box-common ui-block-a">
			<div data-role="header" data-position="inline" data-theme="c">
				<a href="<?=base_url()?>welcome/animation/" data-icon="refresh">Refresh</a>
				<h1>ARTIST</h1>
				<a href="#" data-icon="search">Search</a>
			</div>
			
			
			<ul data-role="listview"  data-inset="true" style="width:auto;margin:40px;">
			<?php foreach($rand_years AS $val) { ?>
				<li><a href="index.html"><?=$val?></a></li>			
			<?  }?>
			</ul>
			
			
		</div>
		
		<div id="box-middle" class="box-common ui-block-b">
			<div id="box-middle-container">

			<div data-role="header" data-position="inline" data-theme="b">
				<a href="<?=base_url()?>welcome/linkage/" data-icon="refresh">Refresh</a>
				<h1>STUFF</h1>
				<a href="#" data-icon="search">Search</a>
			</div>
			
			<ul data-role="listview"  data-inset="true" >
				<li><a href="acura.html">Acura</a></li>
				<li><a href="audi.html">Audi</a></li>
				<li><a href="bmw.html">BMW</a></li>
			</ul>
			
			</div>
		</div>
		
		<div id="box-right" class="box-common ui-block-c">
			<div data-role="header" data-position="inline" data-theme="d">
				<a href="<?=base_url()?>welcome/linkage/" data-icon="refresh">Refresh</a>
				<h1>EVENT</h1>
				<a href="#" data-icon="search">Search</a>
			</div>
		</div>

	</div><!-- /grid-b -->
	
</div>


</body>
</html>