<?php

require __DIR__ . '/../Input.php';
require __DIR__ . '/../parks_config.php';
require __DIR__ . '/../db_connect.php';


// var_dump($parksCount);
$countAll = "SELECT count(*) FROM national_parks";
$stmt = $dbc->prepare($countAll);
$stmt->execute();
$count = $stmt->fetchColumn();
$limit = 4;
$page = Input::get('page');
$maxPages = ceil($count / $limit);

$page = Input::has('page') ? Input::get('page'): 1;
	if ($page < 0 || $page > $maxPages){
		$page = 1;
	} else {
		$page;
	}
$offset = ($page -1) * 4;
	if(Input::has('all')) {
		$limit = (int)$count;
		$offset = 0;
	}	

$selectAll = "SELECT * FROM national_parks LIMIT :limiter OFFSET :offset";

$stmt = $dbc->prepare($selectAll);
$stmt->bindValue(':limiter', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$parks = $stmt->fetchALL(PDO::FETCH_ASSOC);
$errors = [];
$maxDate = date('Y-m-d');

if(!empty($_POST)) {
	try {
		$name = Input::getString('name');
	} catch (Exception $e) {
		$errors['name'] = $e->getMessage();
	}
	try {
		$location = Input::getString('location');
	} catch (Exception $e) {
		$errors['location'] = $e->getMessage();
	}
	try {
		$area = Input::getString('area');
	} catch (Exception $e) {
		$errors['area'] = $e->getMessage();
	}
	try {
		$dateTimeObject = Input::getDate('date_established', new DateTime('1900-01-01'), new DateTime());
	} catch (Exception $e) {
		$errors['date_established'] = $e->getMessage();
	}
	try {
		$description = Input::getString('description');
	} catch (Exception $e) {
		$errors['description'] = $e->getMessage();
	}	

	if(empty($errors)) {
		$formattedDate = $dateTimeObject->format('Y-m-d');
		$query = 'INSERT INTO national_parks (name,location,date_established, area_in_acres, description)
		VALUES (:name, :location, :date_established, :area, :description)';

			$stmt = $dbc->prepare($query);
			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
		    $stmt->bindValue(':location', $location, PDO::PARAM_STR);
		    $stmt->bindValue(':date_established', $formattedDate, PDO::PARAM_STR);
		    $stmt->bindValue(':area', $area, PDO::PARAM_STR);
		    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
		    $stmt->execute();

	}		
}

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
		if ($page < $maxPages) { ?>
			<a class="btn btn-danger" style="padding: 1em; float: right;" href="/national_parks.php?page=<?=($page+1)?>">Next Page</a>
		<?php }
		?>

	</div>

	<div>
		<div id="parksForm">
		<form class="form-horizontal" method="POST">
			<fieldset>
			
			<legend style="color:cornsilk; font-size: 3em">Add National Park</legend>

			<div class="control-group">
				<label style="color:cornsilk" class="control-label">Park Name</label>
					<div class="controls">
						<input type="name"  placeholder="Type Park Here" class='<?= !empty($errors['name'])?>'
							 name="name" type="text" value='<?= isset($_POST['name']) && empty($errors['name'])? $_POST['name']: ''?>' required="">
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
						<input id="date_established" class='<?= !empty($errors['date_established'])?>'
				 name="date_established" type="text" value='<?= isset($_POST['date_established']) && empty($errors['date_established'])? $_POST['date_established']: ''?>' required="">
					</div>
			</div>

			<div class="control-group">
				<label style="color:cornsilk" class="control-label">Area In Acres</label>
					<div class="controls">
						<input id="area-input" name="area" class='<?= !empty($errors['area'])?>'
				 name="area" type="text" value='<?= isset($_POST['area']) && empty($errors['area'])? $_POST['area']: ''?>' required="">
						
					</div>
			</div>		

			<div class="control-group">
				<label style="color:cornsilk" class="control-label">Park Description</label>
					<div class="controls">
						<textarea rows="5" cols="30" id="textarea" class='<?= !empty($errors['description'])?>'
				 name="description" value='<?= isset($_POST['description']) && empty($errors['description'])? $_POST['description']: ''?>' required=""></textarea>
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
		<?php foreach ($errors as $error) : ?>
			<h4 class='errors'>An error has occurred, <?= $error; ?> </h4>
		<?php endforeach ?>		
		</div>
	</div>

</body>
</html>
