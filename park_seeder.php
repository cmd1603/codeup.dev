<?php

require_once 'parks_config.php';
require_once 'db_connect.php';

$query = "TRUNCATE national_parks";

$dbc->exec($query);

// $numRows = $dbc->exec($query);
// echo "Inserted $numRows row." . PHP_EOL;

$national_parks = [
	['name' => 'Kings Canyon', 'location' => 'California', 'date_established' => '1940-03-24', 'area_in_acres' => 461901.20, 'description' => 'Home to several Giant sequoia groves and the General Grant Tree, the world\'s second largest, this park also features part of the Kings River, sculptor of the dramatic granite canyon that is its namesake, and the San Joaquin River, as well as Boyden Cave.'],
	['name' => 'Yellowstone', 'location' => 'Wyoming, Montana, Idaho', 'date_established' => '1872-03-01', 'area_in_acres' => 2219790.71, 'description' => 'Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring.'],
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => 76518.98, 'description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch.'],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94, 'description' => 'The Badlands are a collection of buttes, pinnacles, spires, and grass prairies.'],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21, 'description' => 'Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert.'],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172924.07, 'description' => 'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs.'],
	['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-10-21', 'area_in_acres' => 32950.03, 'description' => 'The park protects a quarter of the Gunnison River, which slices sheer canyon walls from dark Precambrian-era rock.'],
	['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08, 'description' => 'Bryce Canyon is a giant geological amphitheater on the Paunsaugunt Plateau.'],
	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => 337597.83, 'description' => 'This landscape was eroded into a maze of canyons, buttes, and mesas by the combined efforts of the Colorado River, Green River, and their tributaries, which divide the park into three districts.'],
	['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26, 'description' => 'The park\'s Waterpocket Fold is a 100-mile (160 km) monocline that exhibits the earth\'s diverse geologic layers.']
];

$stmt = $dbc->prepare('INSERT INTO national_parks(name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($national_parks as $national_park) {
	$stmt->bindValue(':name', $national_park['name'], PDO:: PARAM_STR);
	$stmt->bindValue(':location', $national_park['location'], PDO:: PARAM_STR);
	$stmt->bindValue(':date_established', $national_park['date_established'], PDO:: PARAM_STR);
	$stmt->bindValue(':area_in_acres', $national_park['area_in_acres'], PDO:: PARAM_INT);
	$stmt->bindValue(':description', $national_park['description'], PDO::PARAM_STR);

$stmt->execute();

echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}

?>
