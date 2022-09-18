<?php
$link = mysqli_connect("localhost", "root", "", "webform_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$birth_date = mysqli_real_escape_string($link, $_REQUEST['birth_date']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobile_number = mysqli_real_escape_string($link, $_REQUEST['mobile_number']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
 
// Attempt insert query execution
$sql = "INSERT INTO newemployee (first_name, last_name, gender, birth_date, email, mobile_number, address, city, state)
 VALUES ('$first_name', '$last_name', '$gender', $birth_date, '$email', '$mobile_number', '$address', '$city', '$state')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>