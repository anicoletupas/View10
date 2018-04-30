
<?php
    include("Config.php");

if($conn === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// attempt insert query execution
$sql = "INSERT INTO contact_us_form (contactName, contactEmail, contactSubject, contactMessage) VALUES ('$name', '$email', '$sunject', '$message')";
if(mysqli_query($conn, $sql)){
   echo "Data successfully Saved.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// close connection
mysqli_close($conn);
 

 

?>
