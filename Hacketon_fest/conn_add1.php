<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="demo";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['add']))
{
    $title=$_POST['title'];
    $ingredients=$_POST['ingredients'];
    $category=$_POST['category'];
    $procedure=$_POST['procedure'];
    
    $file =addslashes(file_get_contents($_FILES["image"]["tmp_name"]));


             $sql_query="INSERT INTO add_recipe(title,ingredients,category,process,image)
    VALUES('$title','$ingredients','$category','$procedure','$file')";
    $res=mysqli_query($conn,$sql_query);

    if ($res)
    {
      
        echo "Your recipe is added  Succesfully!";
    }
    else
    {
        echo "Error:" .$sql."" .mysqli_error($conn);
    }
    mysqli_close($conn);

    
  }
