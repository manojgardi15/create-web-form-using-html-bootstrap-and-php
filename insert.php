<?php
include_once 'db.php';
if(isset($_POST['submit']))
{
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$birth_date = date('y-m-d', strtotime($_POST['birth_date']));
$aadharcard_no = $_POST['aadharcard_no'];
$joining_date = date('y-m-d', strtotime($_POST['joining_date']));
$designation = $_POST['designation'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

// database connection

$sql = "INSERT INTO newemployee (first_name,last_name,gender,birth_date,aadharcard_no,joining_date,designation,email,mobile_number,address,city,state)
     VALUES ('$first_name','$last_name','$gender','$birth_date','$aadharcard_no','$joining_date','$designation','$email','$mobile_number','$address','$city','$state')";
     if (mysqli_query($conn, $sql)) {
        // echo "New record has been added successfully !";
        header('location:display.html');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}


// define variables and set to empty values
$first_nameErr = $last_nameErr = $emailErr = $genderErr = $websiteErr = "";
$first_name = $last_name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $first_nameErr = "Field is required";
  } else {
    $first_name = test_input($_POST["first_name"]);
  }

  if (empty($_POST["last_name"])) {
    $last_nameErr = "Field is required";
  } else {
    $last_name = test_input($_POST["last_name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>