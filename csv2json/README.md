Data Visualization Example - Parsing CSV Data to JSON
=====================================================

The csv2json.php file converts the 4 csv files into a JSON array.

It also sends an 'application/json' Content-Type response header to the browser.

The Javascript program in visualization-logic.js makes an AJAX request to the csv2json.php file.

If the request is successful, the JSON data is stored in the global layers variable.

D3.js uses this data to create the visualization.

This can be run using the built-in webserver in PHP 5.4 or later.

Simply change the current directory to the csv2json folder and run the following command:

php -S 0.0.0.0:8000

Then you can access the example as follows:

http://localhost:8000/stacked-to-grouped-bar.html

You can also inspect the JSON array returned from the PHP script here

http://localhost:8000/csv2json.php


