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
              <li><a href="#">HOME</a></li>
              <li><a href="aboutus.php">ABOUT US</a></li>
              <li><a href="#">RECIPES</a></li>
              <li><a href="register.php">ADD RECIPE</a></li>
               <li><a href="feedback.php">feedback</a></li>
		  </ul>
        </nav>
       
    </section>
</header>
   
<main>
	<section class="jumbo">
	<h1>what do you want to cook today?</h1>
	<div class="search">
	<input type="search" placeholder="find a recipe">
		<button label="FIND">FIND</button>
	</div>
	</section>
	
	<section class="wrapper product">
		<h2 class="section-name">our delicious collections</h2>
        <a  href="#">
		<article class="card featured">
			<div class="box">
				<?php
     $conn=mysqli_connect("localhost","root","","demo");
     if($conn-> connect_error)
     {
       die("connection failed:" .$conn-> connect_error);
     }
     $sql="SELECT title,image FROM add_recipe";
     $result=mysqli_query($conn,$sql);

     
       while($row =mysqli_fetch_array($result))
       {
       	  ?>
       	     <p>

       	  	<?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image" style="width:100px; height:100px">';?></p>
             <h>  <?php echo $row['title'] ?></h>
           <a href="view_recipe.php"><button style="color: black">view</button></a>

             <?php
         }
         ?>

			</div>
			
	</section>
</main>

</body>
</html> 