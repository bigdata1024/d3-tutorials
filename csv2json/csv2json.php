<?php

// Sets the HTTP Response content type header
header("Content-Type: application/json");

$layers = array();

// Prepares the JSON data that will be sent to the browser for D3 to use
$layers[] = csv2json("data1.csv");
$layers[] = csv2json("data2.csv");
$layers[] = csv2json("data3.csv");
$layers[] = csv2json("data4.csv");

// Converts the object into a JSON representation
print json_encode($layers);


/**
 * Takes in a CSV filename and spits out a JSON representation
 *
 * @param string $csvFilename Name of the CSV file
 * @return array
 */
function csv2json($csvFilename)
{
  $fp = fopen($csvFilename, "r");

  // Skip the headers
  $row = fgetcsv($fp);

  // Grab the first row
  $row = fgetcsv($fp);

  $jsonArray = array();

  while ($row !== false) {

    $item = array();

    $item['x'] = (int) $row[0];
    $item['y'] = (double) $row[1];
    $item['y0'] = (double) $row[2];

    $jsonArray[] = $item;

    $row = fgetcsv($fp);
  }

  return $jsonArray;
}
