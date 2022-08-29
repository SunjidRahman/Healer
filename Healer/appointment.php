<?php
include("admin/connect.php");

session_start();
 if (!isset($_SESSION['login'])) {
    header("location:index.php");
     die();
}
echo "user ID:",$_SESSION["login"],"<br>";
echo "user ID:",$_SESSION["user_name"],"<br>";




        $doctorid=$_GET['doctorid'];
        $s="SELECT *FROM doctors WHERE doctor_id = '$doctorid' ";
        $result = mysqli_query($conn, $s);
               
               if (mysqli_num_rows($result) > 0) {
               // output data of each row
               while($row = mysqli_fetch_assoc($result)) {

                echo "doctor ID:", $row['doctor_id'];


?>
<form action="take.php" method="post">
          <!-- <input type="hidden" name="doctor_specialist" value="Medicine/General Physician"> -->
		  <!-- <button type="submit" class="btn btn-primary btn-round  " role="button">Take</button> -->
		 <a href="take.php?doctorid=<?php echo $row['doctor_id'];?>" class="btn btn-danger mt-auto btn-block " role="button">Take</a>

		  </form>


        <?php
               }
            }
        ?>