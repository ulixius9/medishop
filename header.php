<body>
<link rel="stylesheet" type="text/css" media="screen" href="header.css" />
<style>
    .login{
    
    background-color:rgb(241, 100, 35);
    width:100%;
    align-content:right;
    text-align:right;
    position: relative;
  }

  .login h4{
      padding:5px;
      margin:auto;
      align: right;
  }
  
</style>
<?php
session_start();
if (!isset($_SESSION['username'])){
    echo '<div class="login">
   <h4> <a href="login.php">Login</a> / <a href="register.php"> Sign Up</a> </h4>
    </div>';
}

else{
    echo '<div class="login">
    <h4> <a href="logout.php">Logout</a></h4>
     </div>';
 
}


			if(isset($_SESSION["products"])){
				$cart=count($_SESSION["products"]); 
			} else {
				$cart=0; 
			};


?>
<div class="topnav">
    <div class="logo">
        <img src="logos/logo.png" alt="Medishop"/>
    </div>
    <a  href="index.php">Home</a>
    <a href="view_cart.php">My Cart<?php echo "($cart)"?></a>
    <a href="contact.php">Contact</a>
    <div class="search-container">
        <form action="search.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>
</body>
        