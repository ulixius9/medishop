 <?php 

include_once("config.php");
include("inc/config.inc.php"); 
include("header.php"); 

if (!isset($_SESSION['username']) && !isset($_SESSION['Password']))
{
	header("Location:login.php");
}
?>
<title>Success</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<link href="style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/cart.js"></script>


<style>
	
		footer{
        position:relative;
        clear: both;
    
    z-index: 10;
        margin:-3em;
    }
</style>
<?php 
$total = 0;
$uid=$_SESSION['uid'];
foreach($_SESSION["products"] as $product){					
	$product_name = $product["product_name"]; 
	$product_price = $product["product_price"];
	$product_code = $product["product_code"];
	$product_qty = $product["product_qty"];
	$subtotal = ($product_price * $product_qty);
	$total = ($total + $subtotal);
	$sql="insert into orders ( `pcode`, `uid`, `price`, `quantity`, `pname`, `total`) VALUES($product_code,$uid,$product_price,$product_qty,'$product_name',$total)";
	$query_run = mysqli_query($con,$sql);
	if(!$query_run)
	{
		$k=0;
		break;
	}
	else
	{
		$k=1;
	}
}


if ($k==1){
	echo '<div class="container">	
	<h2>Shopping Cart</h2>
	<div class="text-left">	
		<br><br>
		Your order placed successfully.
		<br><br><br>
		<a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
		
	</div>
</div>';
unset($_SESSION['products']);
}

else{
	echo '<script type="text/javascript">alert("Some failiur ouccoured");window.location = "view_cart.php"</script>';
}

include('footer.php');?>




