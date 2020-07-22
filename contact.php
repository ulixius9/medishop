<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<style>
#contact{
        width:100%;

}

body,html {
  /*background-color:rgb(241, 100, 35);*/
  padding:0%;
  margin: 0%;
  margin-top: 0%;
  font-family: Arial, Helvetica, sans-serif;
}

#address{
        width:100%;
}
#enquiry{
        
        width:100%;
}
#enquiry .bot{
        background-color:orange;
        float:left;
        padding:2.5%;     
        width:45%;
}
.bot iframe{
        margin:10%;
        margin-left:20%;
}
.bot h1{
        margin-top:10%;
        padding:0%;
        margin:3%;
}
.cform .heading h1{
        margin-top:10%;
        padding:0%;
        margin:3%;
}
#enquiry .cform{
        float:left;
        padding:2.5%;
        width:45%;
        padding-bottom:2.65%;
        background-color:blue;
}
.map{
        margin:0;
}
.form1 textarea,input[type=text],input[type=email], select {
    width: 100%;
    padding: 2% 3%;
    margin: 1% 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.form1 input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 2% 3%;
    margin: 2% 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form1 input[type=submit]:hover {
    background-color: #45a049;
}

.map{
        width:100%;
}
.form{
 align-content: center;
 text-align: center;
 padding-bottom:1%;
 background-color:#9e9e9e;
}
.form h3{
        margin-top:0%;
        padding-top:0%;
}

@media screen and (max-width: 600px) {
        #enquiry .bot{
        padding:2.5%;     
        width:95%;
}
#enquiry .cform{
        width:95%;
        padding-bottom:2.65%;
        }
}

</style>
</head>
<body>
<?php 
include("header.php");
include("config.php");
if (isset($_POST['name']))
{
        $sql=mysqli_query($con,"insert into contact_us values('".$_POST['name']."','".$_POST['email']."',".$_POST['contact'].",'".$_POST['message']."')");
}
?>
<div id="contact">
<div id="details">
<div id="address">

<div class="form">
<h3>Email</h3>
<h3>medicare@gmail.com</h2><b3><hr>
<h3>Phone no</h3>
<h3>25669834</h3>

</div>
<div id="enquiry">
<div class="bot">
        <h1 align="center">Live Support</h1>
        <iframe allow="microphone;" width="60%" height="450" src="https://console.dialogflow.com/api-client/demo/embedded/b0725991-b134-4dc6-b266-2f6a59451f0b"></iframe>
</div>
<div class="cform">
<div class="heading"><h1 align="center">Contact Us</h1></div>
<div class="form1">
<form action="contact.php" method="post">
<br><label>Enter Name</label><br>
<input type="text" name="name"><br>
<br><label>Enter Email</label><br>
<input type="email" name="email"><br>
<br><label>Enter Contact No </label><br>
<input type="text" name="contact"><br>
<br><label>Enter Message</label><br>
<textarea colm="1000" rows="10" name="message"></textarea><br>
<br><input type="submit">
</form>
</div>
</div>
</div>
</div>
<div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30142.843812866307!2d72.85035578097875!3d19.201513719007405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b73c4a1c5789%3A0x96e40cabbd1f81c3!2sKandivali+East%2C+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1540647936526" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>     
</div>

<?php include("footer.php");

?>
</body>
</html>