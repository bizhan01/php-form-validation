<!DOCTYPE html>
<html>
	<head>
		<title>Form Handaling</title>
	</head>
	<body>
		<form name="form1" method="POST" action="<?=$_SERVER['PHP_SELF']?>" >
			<?php
				// check the form method
				$chkname="";
				$ok="";
				if($_SERVER['REQUEST_METHOD']=="POST")
				{
					$name=$_POST['fname'];
					if(empty($name))
					{
						$chkname="Name is required!";
					}
					else
					{
						$ok="success";
					}
				}
			?>
			<label>First Name</label> <span style="color:red">*</span> <br />
			<input type="text" name="fname" placeholder="Please enter your name" />
			<input type="submit" value="Save" /> <span style="color:red"><?=$chkname?></span><span style="color:green"><?=$ok?></span>
		</form>
		



	</body>
</html>