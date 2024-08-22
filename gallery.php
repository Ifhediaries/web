<?php  
// Connect to database  
require_once 'database.php';  
  
// Query to retrieve gallery images  
$query = "SELECT * FROM gallery";  
$result = mysqli_query($conn, $query);  
  
// Display gallery images  
while ($row = mysqli_fetch_assoc($result)) {  
   echo "<img src='images/gallery/". $row['image_name']. "' alt='". $row['image_description']. "'>";  
}  
?>
