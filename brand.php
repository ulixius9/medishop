<html>
<style>
    .brand .img{
        float:left;
       padding: 3em;
       margin:10px;
       height:20%;
       display:block;
        background-color:blue;
    }
    a{
        color:black;
    }
    a:hover h3{
        color:blue
    }
    .brand{
        padding:1%;
        margin:1%;
        width:96%;
        background-color:orange;
        align-content: center;
        display: table;
    }
    .brand .dis{
        height:138px;
        width:69%;
        margin:10px;
        padding:10px;
        background-color:#D3D3D3;
        float:left;
        display: table-cell;
        }
    .brand .price{
        height:138px;
        width:10%;
        margin:10px;
        padding:10px;
        background-color:#D3D3D3;
        float:left;
        display: table-cell;
        }
    html,body{
        margin:0px;
        padding:0px;
        font-family: Arial, Helvetica, sans-serif;
    }
    @media screen and (max-width: 600px) {
     .img{
         margin-left:27%
     }
     .dis{
         width:90%
     }
    .title h1{
        width:97%;
        font-size:24px;
        align:center;
    }
    }

</style>



<?php
include("config.php");
include("header.php");
$brand=$_GET['brand'];
echo "<div class='title'><h1 align='center'><big><big><u>".strtoupper($brand)."</u></big></big></h2></div>";
?>
<?php
$sql=mysqli_query($con,"select * from description where manufacturer='$brand'");
while($arr=mysqli_fetch_array($sql))
   {
    $name1=str_replace(" ","+",$arr["name"]);
    echo '<a href="http://localhost/os/medicine.php?name='.$name1.'">';
    echo '<div class="brand">';
    echo '<div class="img"><img src="logos/medicine.png"></div>';
    echo '<div class="dis"><div class="title"><h3>'.$arr['name'].'<br><small><small><i>'.$arr['manufacturer'].'</i></small></small></h3></div><div class="details">Composition:'.$arr['composition'].'</div></div>';
    echo '<div class="price"><h3>Price: '.$arr['price'].'/-<h3></div>';
    echo '</div></a>'; 
   }
   include("footer.php");
?>
</html>