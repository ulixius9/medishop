<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<?php
            
			if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$query = "select * from userinfo where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					$_SESSION['uid']=$row['uid'];
					header( "Location: index.php");
					}
					else
					{
                        echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials");window.location = "login.php";</script>';
                        
					}
				}
				else
				{
                    echo '<script type="text/javascript">alert("Database Error");window.location = "login.php";</script>';
				}
			}
			else
			{
                echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials");window.location = "login.php";</script>';
            }
            ?>