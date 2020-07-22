<!DOCTYPE html>
<html>
<head>
    <title>Medishop</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" >
    <link rel="stylesheet" type="text/css" href="./slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
</head>
<body>
  <?php 
    include("header.php");
    include("config.php");
    $sql="select * from description limit 5";
    $result=mysqli_query($con,$sql);
  ?>
    <div class="Contents">
        <div class="Topb">
            <h1>TOP BRANDS</h1>
            <section class="center slider">
                    <div>
                      <a href="brand.php?brand=cipla">
                      <img src="Brands/download.png">
                      </a>
                    </div>
                    <div>
                        <a href="brand.php?brand=Sun+Pharmaceutical ">
                      <img src="Brands/sun.jfif">
                      </a>
                    </div>
                    <div>
                        <a href="brand.php?brand=Glenmark+Pharmaceuticals">
                      <img src="Brands/g.png" >
                      </a>
                    </div>
                    <div>
                        <a href="brand.php?brand=lupin">
                      <img src="Brands/lupin.png" >
                      </a>
                    </div>
                    <div>
                        <a href="brand.php?brand=reddys">
                      <img src="Brands/redddy.png" >
                      </a>
                    </div>          
                  </section>
        </div>
        <div class="TopP">
                <h1>TOP PRODUCTS</h1>
                <section class="center slider">
                        <?php
                        while($arr=mysqli_fetch_array($result))
                        {
                        echo '<a href="http://localhost/os/medicine.php?name='.$arr['name'].'" onMouseOver="this.style.color='.'black'.'" onMouseOut="this.style.color='.'black'.'"><div>';
                        echo '<div class="mind" style="background-color:orange"><img src="logos/medicine.png" style="padding:20%;margin:auto;margin-left:7%;"></div>';
                        echo '<div class="mname"><h3>'.$arr['name'].'</h3></div>';  
                        echo '</div></a>';
                        }
                        ?>
                    </section>
            </div>
    </div>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
  
  
      function myFunction(x) {
    if (x.matches) { // If media query matches
        $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 2   
      });
    } else {
        $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 2
      });
    }
}


    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
  </script>
  <?php include("footer.php");?> 
    </body>
</html>