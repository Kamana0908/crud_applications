<?php 
include 'dbcon.php';
if(isset($_POST['add_students'])){

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];

//validation
if($firstName =="" || empty($firstName)){
    header('location:index.php?message=you need to fill in the first name!');
}
else{
    $query = "insert into `students`(`firstName`, `lastName`,`age`) values('$firstName','$lastName', '$age')";
     $result = mysqli_query($connection, $query);

     if(!$result){
        die("Query Failed".mysqli_error());
     }
     else{
        header('location:index.php?insert_msg=Your data has been added successfully');
     }
 
    }

}
?>