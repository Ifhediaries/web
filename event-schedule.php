<?php  
// Connect to database  
require_once 'database.php';  
  
// Query to retrieve event schedule  
$query = "SELECT * FROM event_schedule";  
$result = mysqli_query($conn, $query);  
  
// Display event schedule  
while ($row = mysqli_fetch_assoc($result)) {  
   echo "<h2>". $row['event_name']. "</h2>";  
   echo "<p>". $row['event_description']. "</p>";  
   echo "<p>Date: ". $row['event_date']. "</p>";  
   echo "<p>Time: ". $row['event_time']. "</p>";  
   echo "<hr>";  
}  
?>
