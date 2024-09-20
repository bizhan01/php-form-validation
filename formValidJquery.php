<!DOCTYPE html>
<html>
<head>
	<title>Form Handling</title>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<form name="form1" method="POST" action="<?=$_SERVER['PHP_SELF']?>" >

			<label>First Name</label> <span style="color:red">*</span>  <br />
			<input type="text" name="fname" id="fname" placeholder="Please enter your name" /><span id="message"></span>
			<input type="submit" value="Save" />

		</form>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#fname").mouseleave(function(event){

			var fname = $("#fname").val();
			if(fname=="")
			{
				$("#fname").css('border','1px solid red');
			}
			else
			{
				$("#fname").css('border','1px solid green');
			}
		});
	});
</script>
