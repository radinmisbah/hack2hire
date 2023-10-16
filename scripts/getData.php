<?php

if($_SERVER['REQUEST_METHOD'] === 'GET'){
// Query the database and retrieve data
$data = array(
    'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    'datasets' => array(
        array(
            'label' => 'Energy Production',
            'backgroundColor' => 'rgb(75, 192, 192)',
            'borderColor' => 'rgb(75, 192, 192)',
            'data' => [65, 59, 80, 81, 56, 65, 59, 80, 81, 56, 100, 80],
        ),
        array(
            'label' => 'Energy Consumption',
            'backgroundColor' => 'rgb(130, 94, 228)',
            'borderColor' => 'rgb(130, 94, 228)',
            'data' => [100, 70, 90, 150, 155, 70, 70, 90, 100, 70, 50, 100],
        ), array(
            'label' => 'Energy Consumption limit',
            'borderColor' => 'rgb(255, 0, 0)',
            'borderDash' => [5,5],
            'data' => [100,100,100,100,100,100,100,100,100,100,100],
        )
    )
);

// Convert data to JSON
echo json_encode($data);
   
}

?>
