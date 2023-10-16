<?php
// Sample data (replace with your data retrieval logic)
$data = [
    ["John", "Doe", "john@example.com"],
    ["Jane", "Smith", "jane@example.com"],
    ["Bob", "Johnson", "bob@example.com"],
];

// Start the HTML table
echo "<tr>";
// echo "<table border='1'>";
echo "<tr><th>Country</th><th>Sales</th><th>Value</th><th>Bounce</tr>";

// Populate the table with data
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

// End the HTML table
echo "</table>";
?>
