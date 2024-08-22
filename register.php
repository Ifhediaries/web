<?php  
// Connect to database  
require_once 'database.php';  
  
// Registration form submission  
if (isset($_POST['submit'])) {  
   $name = $_POST['name'];  
   $email = $_POST['email'];  
   $phone = $_POST['phone'];  
   $college = $_POST['college'];  
  
   // Insert data into database  
   $query = "INSERT INTO registrations (name, email, phone, college) VALUES ('$name', '$email', '$phone', '$college')";  
   mysqli_query($conn, $query);  
  
   echo "<p>Registration successful!</p>";  
}  
  
// Registration form  
?>  
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">  
   <label for="name">Name:</label>  
   <input type="text" id="name" name="name"><br><br>  
   <label for="email">Email:</label>  
   <input type="email" id="email" name="email"><br><br>  
   <label for="phone">Phone:</label>  
   <input type="tel" id="phone" name="phone"><br><br>  
   <label for="college">College:</
