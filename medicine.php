<html>
<script type="text/javascript" src="cart.js"></script>
    <style>
         html,body{
        margin:0px;
        min-height:100%;
        height:100%;
        padding:0px;
        font-family: Arial, Helvetica, sans-serif;
    }
    span{
        float:right;
    }
    .form{
        position:relative;
        float:left;
        width:10%;
    }
    .mimg img{
        margin:5%;
        float:left;
        height:45%;    
    }
    select{
        padding:3px;
        margin:3px;
    }
    .title1{

        padding-top:6%;
        margin-left:5%;
    }
    .divTable{
    padding-top:5%;
	display: table;
	width: 40%;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	display: table-cell;
	padding: 3% 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="script/cart.js"></script>
  
    <?php 
    
		 
        include('header.php');
        include('config.php');?>
        
        <?php
        $name=$_GET['name'];
        $sql="Select * from description where name='$name' limit 1";
        $res=mysqli_query($con,$sql);
        while($arr=mysqli_fetch_array($res))
        {
            echo "<div class='main'>";
            echo '<div class="title1 "><h1>'.$name.'</h1></div>';
            echo "<div class='mimg'><img src='logos/medicine (1).png'></div>";
            echo '<div class="divTable">';
            echo '<div class="divTableBody">';
            echo '<div class="divTableRow">';
            echo '<div class="divTableCell">Manufacture:</div>';
            echo '<div class="divTableCell">'.$arr['manufacturer'].'<br><small><small><i>More from <a href="brand.php?brand='.$arr['manufacturer'].'">'.$arr['manufacturer'].'</a></i></small></small></div>';
           ?> 
           <div class="divTableCell">
    <form class="product-form">
					<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
                        </div>
                        <input name="product_name" type="hidden" value="<?php echo $arr["name"]; ?>">
                        <input name="name" type="hidden" value="<?php echo $arr["name"]; ?>">
                        <input name="product_price" type="hidden" value="<?php echo $arr["price"]; ?>">					
						<input name="product_code" type="hidden" value="<?php echo $arr["code"]; ?>">
						<button type="submit">Add to Cart</button>
					</div>
				</form>
    </div>
    
    <?php       
           
           echo '</div>';
            echo '<div class="divTableRow">';
            echo '<div class="divTableCell">Composition:</div>';
            echo '<div class="divTableCell">'.$arr['composition'].'</div>';
            echo '</div>';
            echo '<div class="divTableRow">';
            echo '<div class="divTableCell">Form:</div>';
            echo '<div class="divTableCell">'.$arr['form'].'</div>';
            echo '</div>';
            echo '<div class="divTableRow">';
            echo '<div class="divTableCell">Category:</div>';
            echo '<div class="divTableCell">'.$arr['category'].'</div>';
            echo '</div>';
            echo '<div class="divTableRow">';
            echo '<div class="divTableCell">Price:</div>';
            echo '<div class="divTableCell">'.$arr['price'].' Rs/-</div>';
            echo '</div></div></div>';
            echo '</div>';
        }
        include('footer.php');
    ?>
    <style>
    footer{
        position:relative;
        clear: both;
    width:103%;
    z-index: 10;
        margin:-3em;
    }
    </style>
</html>