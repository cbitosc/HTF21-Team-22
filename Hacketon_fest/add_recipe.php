<!DOCTYPE html>
<html>
  <head>
    <link href="add_recipe_styles.css" rel="stylesheet" />
  </head>
  <body>
    <form action="conn_add1.php" method="post" enctype="multipart/form-data" id="required">
      <h1>What's on your mind today?</h1>
      <p>
        <label class="display" for="title">Title:</label>
        <input type="text" id="title" name="title" />
      </p>
      <p>
        <label for="ingredients">Ingredients:</label>
        <textarea
          name="ingredients"
          id="ingredients"
          cols="30"
          rows="10"
        ></textarea>
      </p>
      <p>
        <label for="category">Category:</label>
        <select name="category" id="category">
          <option value="">Choose Category</option>
          <option value="beverages">Beverages</option>
          <option value="cookies">Cookies</option>
          <option value="meat">Meat</option>
          <option value="veg">Veg</option>
        </select>
      </p>
      <p>
        <label for="proc">Procedure:</label>
        <textarea name="procedure" id="procedure" cols="30" rows="10"></textarea>
      </p>
      <p>
        <label>Select image to upload:</label>
        <input type="file" name="image" id="image" />
      </p>
      <p>
        <button type="submit" name="add">Add</button>
      </p>
    </form>

    <div id="errorMessages"></div>
  </body>
</html>
