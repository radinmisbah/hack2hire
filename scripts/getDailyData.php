<?php

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $labels = [];
    for ($i = 1; $i <= 31; $i++) {
        $labels[] = $i ;
    }
    
    $data = array(
        'labels' => $labels,
        'datasets' => array(
            array(
                'label' => 'Energy Production',
                'backgroundColor' => 'rgb(75, 192, 192)',
                'borderColor' => 'rgb(75, 192, 192)',
                'data' => [65, 59, 80, 81, 56, 65, 59, 80, 81, 56, 100, 80, 75, 70, 85, 90, 88, 78, 95, 70, 82, 79, 76, 73, 81, 90, 92, 89, 88, 77, 75],
            ),
            array(
                'label' => 'Energy Consumption',
                'backgroundColor' => 'rgb(130, 94, 228)',
                'borderColor' => 'rgb(130, 94, 228)',
                'data' => [100, 70, 90, 150, 155, 70, 70, 90, 100, 70, 50, 100, 95, 75, 80, 85, 90, 78, 100, 75, 80, 82, 88, 75, 81, 90, 92, 89, 88, 77, 75],
            ),
            array(
                'label' => 'Energy Consumption Limit',
                'borderColor' => 'rgb(255, 0, 0)',
                'borderDash' => [5, 5],
                'data' => array_fill(0, 31, 100), // Fill an array with 31 '100' values
            )
        )
    );
    
// Convert data to JSON
echo json_encode($data);
   
}

?>