<?php

require __DIR__ . '/../Input.php';
require __DIR__ . '/../parks_config.php';
require __DIR__ . '/../db_connect.php';
require __DIR__ . '/../parks-form.php';

// var_dump($parksCount);

$limit = 4;
if (Input::has('page')) {
	$page = Input::get('page');
	$offset = (Input::get('page') - 1) * $limit;
} else {
	$offset = 0;
	$page = 1;
}

$parksCount = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
$pageCount = ceil($parksCount / $limit);
$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset');
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$parks = $stmt->fetchALL(PDO::FETCH_ASSOC);

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
	<style>
		.control-label {
			font-size: 2em;
		}
	</style>
	<title>National Parks</title>	
</head>
<body  background="img/forest.jpg" style="background-color: black;
      background-repeat: no-repeat; webkit-background-size: cover; moz-background-size: cover; o-background-size: cover; background-size: cover; padding-left: 1%; padding-bottom: 1%;">
	<div class="container">
		<h1>US National Parks</h1>
		<table class="table table-bordered table-hover"; style="color: chocolate; background-color: beige; opacity: 0.9; font-weight: 600">
			<thead>
				<tr>
					<th>Park</th>
					<th>Location</th>
					<th>Date Established</th>
					<th>Area in Acres</th>
					<th>Description</th>
				</tr>
			</thead>
		<?php foreach ($parks as $park) : ?>
			<tr>
				<td> <?= $park['name']; ?></td>
				<td> <?= $park['location']; ?></td>
				<td> <?= date_format(date_create($park['date_established']), 'F j, Y'); ?></td>
				<td> <?= number_format($park['area_in_acres'], 2); ?></td>
				<td> <?= $park['description']; ?></td>
			</tr>
		<?php endforeach ?>		
		</table>

	<?php
	if ($page > 1) { ?>
		<a class ="btn btn-danger" style="padding: 1em;" href="/national_parks.php?page=<?=($page - 1)?>">Previous Page</a>
	<?php }	
	if ($page < $pageCount) { ?>
		<a class="btn btn-danger" style="padding: 1em; float: right;" href="/national_parks.php?page=<?=($page+1)?>">Next Page</a>
	<?php }
	?>

	</div>
	<div>
		<div id="parksForm" class=">
		<form class="form-horizontal" method="POST">
			<fieldset>
			
			<legend style="color:cornsilk; font-size: 3em">Add National Park</legend>

			<div class="control-group">
				<label style="color:cornsilk" class="control-label">Park Name</label>
					<div class="controls">
						<input type="name" name="name" type="text" placeholder="Type Park Here" class="input-large" required="">
					</div>
			</div>
			<br>
			<div class="control-group">
				<label style="color:cornsilk" class="control-label">Park Location</label>
					<div class="controls">
						<select id="location" name="location" class="input-large">
							<?php include_once '../states.php';
								foreach ($states as $state => $stateName): ?>
								<option><?= $stateName ?></option>
							<?php endforeach ?>
						</select>
					</div>
			</div>
			<br>
			<div class="control-group">
				<label style="color:cornsilk" class="control-label">Date Established</label>
					<div class="controls">
						<input id="established" name="date" type="text" placeholder="1900-01-01" class="input-large" required="">
						<p class="help-block" style="color:white">Format: YYYY-MM-DD</p>
					</div>
			</div>

			<div class="control-group">
				<label style="color:cornsilk" class="control-label">Area In Acres</label>
					<div class="controls">
						<input id="area-input" name="area" placeholder="100000.11" class="input-large" required="">
						<p class="help-block" style="color:white">Numbers only</p>
					</div>
			</div>		

			<div class="control-group">
				<label style="color:cornsilk" class="control-label">Park Description</label>
					<div class="controls">
						<textarea rows="5" cols="30" id="textarea" name="description" required=""></textarea>
						<p class="help-block" style="color:white">Limit 500 characters.</p>
					</div>
			</div>

			<div class="control-group">
				<label style="color:cornsilk" class="control-label"></label>
					<div class="controls">
						<button id="submit" type="submit" value="submit" name="submit" class="btn btn-info">Submit</button>
					</div>
			</div>		

			</fieldset>		
		</form>
		</div>
	</div>

</body>
</html>







