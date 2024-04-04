<?php 

// Read the JSON file 
$json = file_get_contents('test.json'); 
// Decode the JSON file 
$json_data = json_decode($json,true);
$path = $json_data["paths"];

// Display raw data 
foreach ($path as $key => $value) {
    echo "This is path: $key <br>";
    foreach ($value as $i => $method) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;This is method: $i <br>";
        echo '<pre>'; 
        print_r($method); 
        echo '</pre>';
    }
}


// Display data 
foreach ($path as $key => $value) {
    echo "<h2>$key</h2>";
    echo '<table border="1">';
    echo '<tr><th>Method</th><th>Summary</th></tr>';
    foreach ($value as $method => $details) {
        $methodName = $method;
        $summary = isset($details['summary']) ? $details['summary'] : '';
        echo '<tr>';
        echo "<td>$methodName</td>";
        echo "<td>$summary</td>";
        echo '</tr>';
    }
    echo '</table>';
    echo "<br>";
}


//echo '<pre>'; 
//print_r($path); 
//print_r($json_data["paths"]["/users"]["post"]["parameters"]["0"]); 
//echo '</pre>';


?>
