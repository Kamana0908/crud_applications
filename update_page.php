 <?php include('header.php'); ?>
<?php include('dbcon.php'); ?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

}
        $query = "SELECT * FROM `students` where `id` = '$id' ";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die("query Failed".mysqli_error());
        }
         else{

              $row = mysqli_fetch_assoc($result);
              
                
            }

?>
<?php 
if(isset($_POST['update_students'])){
    $firstName =$_POST['firstName'];
     $lastName =$_POST['lastName'];
      $age =$_POST['age'];

      $query = "update `students` set `firstName`  = '$firstName', 
      `lastName` = '$lastName', `age` = '$age' where `id` = $id";
      $result = mysqli_query($connection, $query);
       if(!$result){
            die("query Failed".mysqli_error());
        } 
        else{
            header('location:index.php?update_msg=You have successfully updated the data.');
        }
    }
?>


    <form action="update_page.php?id_new=<?php echo $id;?>" method="post">

        <div class="form-group">
              <label for="firstName" >First Name</label>
              <input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName']?>">       </div>
         <div class="form-group">
              <label for="lastName" >Last Name</label>
              <input type="text" name="lastName" class="form-control" value="<?php echo $row['lastName']?>">
        </div>
        <div class="form-group">
              <label for="age" >Age</label>
              <input type="text" name="age" class="form-control" value="<?php echo $row['age']?>">
         </div>
             <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>






 <?php include('footer.php'); ?>