<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?=base_url()?>asset/webkit.css" />

<title>3 linkage</title>
</head>
<body>
    <div id="box-left" class="box-common" style="background:url(<?=base_url()?>img/blur/bg-race-protoss-top.jpg) no-repeat right top;">
		<div class="box-dark-alpha">
			<div class="box-title">ARTIST</div>
			<?php foreach($rand_years AS $val) { ?>
				<span class="font40px"><?=$val." , "?> </span>
			<?  }?>
		</div>

    </div>

    <div id="box-middle" class="box-common" style="background:url(<?=base_url()?>img/blur/bg-race-terran-top.jpg) no-repeat right top;">
		<div class="box-light-alpha">
			<div class="box-title">STUFF</div>
	    	
		</div>
    </div>

    <div id="box-right" class="box-common" style="background:url(<?=base_url()?>img/blur/bg-race-zerg-top.jpg) no-repeat right top;">
		<div class="box-dark-alpha">
			<div class="box-title">EVENT</div>
	    	
		</div>
    </div>
</body>
</html>