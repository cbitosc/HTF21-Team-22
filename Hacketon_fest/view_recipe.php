<!DOCTYPE html>
<html>
<head>
<link href="homepage_styles.css" rel="stylesheet">
</head>
<body>
<header>
    <section class="wrapper nav-flex">
        <nav>
           <a id="logo" href="#">CookBook</a>
        </nav>
        <nav class="navigation">
		  <ul>   
              <li><a href="homepage.php">HOME</a></li>
              <li><a href="aboutus.php">ABOUT US</a></li>
              <li><a href="#">RECIPES</a></li>
              <li><a href="register.php">ADD RECIPE</a></li>
		  </ul>
        </nav>
       
    </section>
</header>
   
     <p>
         <?php
     $conn=mysqli_connect("localhost","root","","demo");
     if($conn-> connect_error)
     {
       die("connection failed:" .$conn-> connect_error);
     }
     $sql="SELECT title,image,ingredients,category,process FROM add_recipe";
     $result=mysqli_query($conn,$sql);

     
       while($row =mysqli_fetch_array($result))
       {
          ?>
             <p>
              
            <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image" style="width:250px; height:250px">';?></p>
             <h1>  <?php echo $row['title'] ?></h1>
             <p>  <?php echo $row['ingredients'] ?></p>
              <p>  <?php echo $row['category'] ?></p>
              <p>  <?php echo $row['process'] ?></p>

             <?php
         }
         ?>

     </p>
</body>
</html> 