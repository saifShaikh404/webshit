<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- <form action="<?php base_url() . "Home/index"; ?>" method="post">
		<input type="text" name="searchBar" id="searchBar" placeholder="Search Here...">
		<input type="submit" name="submit" id="submit" value="search">
	</form> -->

	<!-- Method 2 -->
	<form action="<?php base_url() . "Home/index"; ?>" method="post">
		<input type="text" name="second_search" id="second_search" placeholder="Search Data Here...">
		<input type="submit" name="search" id="submit" value="search">
	</form>

	<div>
		<?php foreach($dataTable as $datalist){ ?>
			<div><?php echo $datalist['name']; ?></div>
			<div><?php echo $datalist['another_name']; ?></div>
			<br>
		<?php }	?>
	</div>

</body>
</html>