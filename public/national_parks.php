<?php

require __DIR__ . '/../Input.php';
require __DIR__ . '/../parks_config.php';
require __DIR__ . '/../db_connect.php';

$parksCount = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

var_dump($parksCount);
$limit = 4;
if (Input::has('page')) {
	$page = Input::get('page');
	$offset = (Input::get('page') - 1) * $limit;
} else {
	$offset = 0;
	$page = 1;
}


$pageCount = ceil($parksCount / $limit);
$query = "SELECT name, location, date_established, area_in_acres FROM national_parks LIMIT $limit OFFSET $offset";

$parks = $dbc->query($query)->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous"
	>
	<title>National Parks</title>	
</head>
<body>
	<div class="container">
		<h1>US National Parks</h1>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Park</th>
					<th>Location</th>
					<th>Date Established</th>
					<th>Area in Acres</th>
				</tr>
			</thead>
		<?php foreach ($parks as $park) : ?>
			<tr>
				<td> <?= $park['name']; ?></td>
				<td> <?= $park['location']; ?></td>
				<td> <?= $park['date_established']; ?></td>
				<td> <?= $park['area_in_acres']; ?></td>
			</tr>
		<?php endforeach ?>		
		</table>

	<?php
	if ($page > 1) { ?>
		<a class ="btn btn-danger" style="padding: 2em;" href="/national_parks.php?page=<?=($page - 1)?>">Previous Page</a>
	<?php }	
	if ($page < $pageCount) { ?>
		<a class="btn btn-danger" style="padding: 2em; float: right;" href="/national_parks.php?page=<?=($page+1)?>">Next Page</a>
	<?php }
	?>

	</div>		
</body>
</html>







