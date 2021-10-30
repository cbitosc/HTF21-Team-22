<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Feedback Form Design | Webkit Coding</title>
  <link rel="stylesheet" type="text/css" href="stylefeed.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
  <section></section>
  <div class="container">
    <form action="feedbacon.php" method="post">
      <h1>Give your Feedback</h1>
      <div class="id">
        <input type="text" placeholder="Full name" name="fullname" id="fullname" required>
       
        <i class="far fa-user"></i>
      </div>
      <div class="id">
        <input type="email" placeholder="Email address" name="emai" id="email" required>
        <i class="far fa-envelope"></i>
      </div>
      <textarea cols="15" rows="5" placeholder="Enter your opinions here.." name="jobcategory" id="jobcategory" required></textarea>
      <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
      <center> <input type="submit" name="ADD"></center><br>
    </form>
    
  
  </div>

   
</body>

</html>