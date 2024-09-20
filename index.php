<?php
ob_start();
require_once("config.php");
 ?>

<?php
if (isset($_POST['submit'])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $website=$_POST["website"];
  $comment=$_POST["comment"];
  $gender=$_POST["gender"];

  $q="INSERT INTO `employees` ( `name`, `email`,`website`, `comment`, `gender`) VALUES ( '$name', '$email','$website', '$comment', '$gender')";
   $insert=mysqli_query($con, $q);
   if($insert){
     header("location:index.php");
   }
   else {
     echo "Not Inserted";
   }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Validation</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
  </head>
  <body>
    <div class="container well">
      <div class="panel panel-info">
        <div class="panel panel-heading">
        <center>  <h1 style="margin:0px; font-family: Algerian">PHP Form Validation Example</h1> </center>  </div>
        <div class="panel panel-body">
          <form method="POST"  name="form1"  >
            <div class="form group">
              <label for="">Name <span style="color: red">*</span></label>
              <input type="text" name="name" id="name"  class="form-control" placeholder="Your Name Please">
              <label for="">E-mail Address<span style="color: red">*</span></label>
              <input type="email" name="email"  id="email"  value="" class="form-control" placeholder="Your E-mail Address Please">
              <label for="">Website </label>
              <input type="text" name="website"  value="" class="form-control" placeholder="Your Website Please">
              <label for="">Comment</label>
              <textarea name="comment" rows="8" cols="40" class="form-control" placeholder="Your Comment Please"></textarea>
              <label for="">Gender</label> <br>
							<input class="" type="radio" name="gender"  id="isAdmin" value="1" >
							<span class="label-input100">Male</span> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							<input  type="radio"   name="gender" id="isAdmin" value="2" >
							<span class="label-input100">Female</span> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							<input  type="radio"   name="gender" id="isAdmin" value="3" >
							<span class="label-input100">Other</span> <br></br>
              <input type="submit" name="submit" value="Submit" class="btn btn-info btn-lg">
            </div>
          </form>
          </div>
          <div class="panel panel-footer">
            <p>
              Design & Develop By: Mehria Yawari<br>
              More Examples:<br>
              <a href="formValidJquery.php">Form Validation I</a><br>
              <a href="formValidation.php">Form Validation II</a>
            </p>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#fname").mouseleave(function(event){
			var fname = $("#fname").val();
			if(fname=="")
			{
				$("#fname").css('border','2px solid red');
			}
			else
			{
				$("#fname").css('border','2px solid green');
			}
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#email").mouseleave(function(event){
			var fname = $("#email").val();
			if(fname=="")
			{
				$("#email").css('border','2px solid red');
			}
			else
			{
				$("#email").css('border','2px solid green');
			}
		});
	});
</script>
