
<?php 
include "includes/header.php";
?>
	
	<form action="" method="post">
		<div class="form-group">			
			<p>Log in</p>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="password" name="password" required>
		</div>

		<button type="submit" class="btn btn-default form-group" name="submit">Log In</button>
	</form> 



<?php 
include "includes/footer.php";
?>s
	<?php
		if(isset($_POST['submit']))
		{
			$name = $_POST['username'];
			$pwd = sha1($_POST['password']);
			include "includes/db.php";

			$result=mysqli_query($con,"select * from user where username='$name' && password='$pwd';");
			$num=mysqli_num_rows($result);
			
			if($num==1)
			{
				while($row = mysqli_fetch_array($result)){
					$_SESSION['uid'] = $row['u_id'];
					$_SESSION['uname'] = $row['name'];
            	}
				echo "nice ".$_SESSION['uid'];
				$_SESSION['username1']=$name;
				header('location: index.php');
				exit();
			}
			else
			{
				echo "username or password wrong ";
				echo "<a href='login.php' class='btn btn-primary'> Try again</a>";
				//header('location:http://localhost/exmpl/Login/login.php');
			}

		}
		else {
			echo "sorry bro!!";
		}

	?>